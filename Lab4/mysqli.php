<?php
$host = 'localhost';
$port = 3306;
$dbname = 'test';
$username = 'root';
$password = '';

// إنشاء الاتصال باستخدام MySQLi
$conn = new mysqli($host, $username, $password, $dbname, $port);

// التحقق من الاتصال
if ($conn->connect_error){
    // في حالة حدوث خطأ في الاتصال
    die("Connection failed:" . $conn->connect_error);
}else{
    echo "Connected successfully!";
}

// إغلاق الاتصال بعد الاستخدام
$conn->close();
?>