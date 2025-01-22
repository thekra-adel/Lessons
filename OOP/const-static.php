<?php
// 1. const:

class MyClass {
    const PI = 3.14159;

    public static function showConstant() {
        echo "The value of PI is: " . self::PI;
    }
}

// الوصول إلى الثابت مباشرةً عبر اسم الكلاس
echo MyClass::PI . "\n";

// استدعاء طريقة تستخدم الثابت
MyClass::showConstant();


// 2. static


class Counter {
    public static $count = 0;

    public static function increment() {
        self::$count++;
    }

    public static function getCount() {
        return self::$count;
    }
}

// زيادة القيمة باستخدام الطرق
Counter::increment();
Counter::increment();

// طباعة القيمة الحالية للمتغير
echo "Counter value: " . Counter::getCount(); // الإخراج: Counter value: 2

// تعديل القيمة مباشرةً
Counter::$count = 5;
echo "\nUpdated Counter value: " . Counter::getCount(); // الإخراج: Updated Counter value: 5

