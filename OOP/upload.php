<?php
// الاتصال بقاعدة البيانات
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "image_db";

// إنشاء اتصال
$conn = new mysqli($servername, $username, $password, $dbname);

// التحقق من الاتصال
if ($conn->connect_error) {
    die("فشل الاتصال بقاعدة البيانات: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // التحقق من رفع الملف
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $file = $_FILES['image'];
        $fileName = $file['name'];
        $fileTmpName = $file['tmp_name'];
        $fileSize = $file['size'];
        $fileError = $file['error'];
        $fileType = $file['type'];

        // استخراج الامتداد والتحقق منه
        $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
        $allowed = ['jpg', 'jpeg', 'png', 'gif'];

        if (in_array($fileExt, $allowed)) {
            if ($fileSize < 5 * 1024 * 1024) { // الحجم أقل من 5 ميجابايت
                $uniqueName = uniqid('', true) . "." . $fileExt;
                $uploadDir = 'uploads/';
                $uploadPath = $uploadDir . $uniqueName;

                // نقل الملف إلى المجلد
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0777, true); // إنشاء المجلد إذا لم يكن موجودًا
                }
                if (move_uploaded_file($fileTmpName, $uploadPath)) {
                    // إدخال المسار في قاعدة البيانات
                    $sql = "INSERT INTO images (image_path) VALUES (?)";
                    $stmt = $conn->prepare($sql);
                    $stmt->bind_param("s", $uploadPath);
                    if ($stmt->execute()) {
                        echo "تم رفع الصورة وحفظ المسار في قاعدة البيانات بنجاح.";
                    } else {
                        echo "فشل في حفظ المسار في قاعدة البيانات: " . $stmt->error;
                    }
                    $stmt->close();
                } else {
                    echo "حدث خطأ أثناء نقل الملف.";
                }
            } else {
                echo "حجم الصورة كبير جدًا.";
            }
        } else {
            echo "نوع الملف غير مدعوم.";
        }
    } else {
        echo "لم يتم رفع الملف بنجاح.";
    }
}

$conn->close();
?>
