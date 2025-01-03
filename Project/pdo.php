<?php
// إعدادات قاعدة البيانات
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users_admin";  // اسم قاعدة البيانات

try {
    // إنشاء الاتصال باستخدام PDO
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    
    // تعيين وضع الخطأ في PDO
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // إذا تم الاتصال بنجاح، قم بطباعة رسالة تأكيد
    // echo "تم الاتصال بقاعدة البيانات بنجاح!";
}
catch(PDOException $e) {
    // في حال حدوث خطأ، قم بطباعة رسالة الخطأ
    echo "فشل الاتصال: " . $e->getMessage();
}
?>

