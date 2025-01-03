<?php
//  تضمين ملف الاتصال

require 'pdo.php';



// التحقق من البيانات المدخلة
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];

    // التحقق من أن كلمة السر وتأكيد كلمة السر متطابقين
    if ($password !== $confirm_password) {
        $error = "كلمة المرور غير متطابقة!";
    }

    // التحقق من صحة رقم الهاتف
    if (!preg_match('/^(73|77|78)\d{7}$/', $phone)) {
        $error = "رقم الهاتف غير صالح!";
    }

    // التحقق من صحة صيغة البريد الإلكتروني
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "البريد الإلكتروني غير صالح!";
    }

    // إذا لم توجد أخطاء
    if (!isset($error)) {
        // التحقق من أن البريد الإلكتروني غير مسجل مسبقاً
        $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->execute([$email]);
        if ($stmt->rowCount() > 0) {
            $error = "البريد الإلكتروني مسجل مسبقاً!";
        } else {
            // إدخال المستخدم الجديد في قاعدة البيانات
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $stmt = $pdo->prepare("INSERT INTO users (email, password, phone, gender) VALUES (?, ?, ?, ?)");
            $stmt->execute([$email, $hashed_password, $phone, $gender]);

            $success = "تم التسجيل بنجاح!";
            header("Location: welcome.php?email=" . urlencode($email));  // إعادة التوجيه إلى صفحة الترحيب
            exit();  // تأكد من إنهاء السكربت بعد إعادة التوجيه
        }
    }
}
?>

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إنشاء حساب</title>
    <link rel="stylesheet" href="STYLES.css">
</head>
<body>
    <div class="form-container">
        <h2>تسجيل حساب جديد</h2>
        <?php if (isset($error)) { echo "<p class='error'>$error</p>"; } ?>
        <?php if (isset($success)) { echo "<p class='success'>$success</p>"; } ?>

        <form method="POST" action="" id="signupForm">
            <label for="email">البريد الإلكتروني</label>
            <input type="email" id="email" name="email" required>

            <label for="password">كلمة المرور</label>
            <input type="password" id="password" name="password" required>

            <label for="confirm_password">تأكيد كلمة المرور</label>
            <input type="password" id="confirm_password" name="confirm_password" required>

            <label for="phone">رقم الهاتف</label>
            <input type="text" id="phone" name="phone" required>

            <label for="gender">الجنس</label>
            <label><input type="radio" name="gender" value="Male"> ذكر</label>
            <label><input type="radio" name="gender" value="Female"> أنثى</label>

            <button type="submit">تسجيل</button>
        </form>

        <p>هل لديك حساب؟ <a href="login.php">تسجيل الدخول</a></p>
    </div>

    <script src="script.js"></script>
</body>
</html>
