<?php
     if (isset($_POST['name'])) {
    $name = htmlspecialchars($_POST['name']);  
    echo "مرحبًا، " . $name . "!";
          } else {
    echo "لم يتم إرسال بيانات.";
     }
 ?>

<?php
    if (isset($_GET['username'])) {
    $username = htmlspecialchars($_GET['username']);  
    echo "أهلاً، " . $username . "!<br>";
    echo "تم إرسال البيانات باستخدام طريقة GET.";
    } else {
    echo "الرجاء إدخال اسم المستخدم.";
    }
 ?>