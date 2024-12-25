<?php
$host = 'localhost';
$dbname = 'test';
$username = 'root';
$password = '';


try {
    // إنشاء الاتصال باستخدام PDO
    $dsn = "mysql:host=$host;dbname=$dbname";
    $conn = new PDO($dsn, $username, $password);
    //  تعيين وضع الخطأ الى الاستثناءات
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully!";
} catch (Exception $e) {
     //في حالة حدوث خطأ في الاتتصال
    echo "Connection failed:". $e->getMessage();
    
}

?>