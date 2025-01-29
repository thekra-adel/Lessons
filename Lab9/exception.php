<?php

//  استخدام الاستثناءات العادية

function checkNumber($number) {
    if ($number <= 0) {
        throw new Exception("الرقم يجب أن يكون أكبر من الصفر.");
    }
    return "الرقم صالح: $number";
}

try {
    echo checkNumber(-5);
} catch (Exception $e) {
    echo "تم التقاط الاستثناء: " . $e->getMessage();
}

// إنشاء استثناء مخصص

class MyException extends Exception {}

try {
    throw new MyException("هذا خطأ مخصص!");
} catch (MyException $e) {
    echo "تم التقاط استثناء مخصص: " . $e->getMessage();
}


//استخدام finally

try {
    echo "تنفيذ الكود الرئيسي.\n";
    throw new Exception("حدث خطأ!");
} catch (Exception $e) {
    echo "تم التقاط الاستثناء: " . $e->getMessage() . "\n";
} finally {
    echo "تم تنفيذ الكود في finally.";
}


?>
