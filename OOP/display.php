<?php
// الاتصال بقاعدة البيانات
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "image_uploads";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("فشل الاتصال بقاعدة البيانات: " . $conn->connect_error);
}

$sql = "SELECT image_path FROM images";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<img src="' . htmlspecialchars($row['image_path']) . '" alt="صورة" style="width:200px; margin:10px;">';
    }
} else {
    echo "لا توجد صور.";
}

$conn->close();
?>
