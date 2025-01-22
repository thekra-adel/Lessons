<?php

// 1. __construct()

class MyClass {
    public function __construct($name) {
        echo "Welcome, $name!";
    }
}

$obj = new MyClass("Ali"); // الإخراج: Welcome, Ali!


// 2. __destruct()

class MyClass {
    public function __construct() {
        echo "Object created!\n";
    }

    public function __destruct() {
        echo "Object destroyed!";
    }
}

$obj = new MyClass(); // الإخراج: Object created!
// عند نهاية السكربت: Object destroyed!

// 3. __call($name, $arguments)

class MyClass {
    public function __call($name, $arguments) {
        echo "Method $name does not exist. Arguments: " . implode(", ", $arguments);
    }
}

$obj = new MyClass();
$obj->nonExistentMethod("arg1", "arg2"); // الإخراج: Method nonExistentMethod does not exist. Arguments: arg1, arg2


// 4. __callStatic($name, $arguments)

class MyClass {
    public static function __callStatic($name, $arguments) {
        echo "Static method $name does not exist. Arguments: " . implode(", ", $arguments);
    }
}

MyClass::nonExistentStaticMethod("arg1", "arg2"); 
// الإخراج: Static method nonExistentStaticMethod does not exist. Arguments: arg1, arg2


// 5. __get($name)

class MyClass {
    private $data = [];

    public function __get($name) {
        return $this->data[$name] ?? "Property $name does not exist";
    }

    public function __set($name, $value) {
        $this->data[$name] = $value;
    }
}

$obj = new MyClass();
$obj->name = "Ali";
echo $obj->name; // الإخراج: Ali
echo $obj->age;  // الإخراج: Property age does not exist


// 6. __set($name, $value)
<
class MyClass {
    private $data = []; // مكان لتخزين القيم

    // تنفيذ __set عند محاولة تعيين قيمة لخاصية غير معرفة
    public function __set($name, $value) {
        echo "Setting '$name' to '$value'.\n";
        $this->data[$name] = $value;
    }

    // تنفيذ __get لاسترجاع القيم
    public function __get($name) {
        return $this->data[$name] ?? "Property '$name' is not set.";
    }
}

$obj = new MyClass();

// تعيين قيم للخصائص غير المعرفة
$obj->name = "Ali"; // Setting 'name' to 'Ali'.
$obj->age = 25;     // Setting 'age' to '25'.

// طباعة القيم
echo "Name: " . $obj->name . "\n"; // Name: Ali
echo "Age: " . $obj->age . "\n";   // Age: 25


// 7. __isset($name)

class MyClass {
    private $data = [];

    public function __isset($name) {
        return isset($this->data[$name]);
    }

    public function __set($name, $value) {
        $this->data[$name] = $value;
    }
}

$obj = new MyClass();
$obj->name = "Ali";
var_dump(isset($obj->name)); // الإخراج: bool(true)


// 8. __unset($name)

class MyClass {
    private $data = [];

    public function __set($name, $value) {
        $this->data[$name] = $value;
    }

    public function __get($name) {
        return $this->data[$name] ?? null;
    }

    public function __unset($name) {
        echo "Unsetting '$name'.\n";
        unset($this->data[$name]);
    }
}

$obj = new MyClass();

// تعيين قيم
$obj->name = "Ali";
$obj->age = 30;

// حذف خاصية
unset($obj->name); // Unsetting 'name'.

// محاولة الوصول إلى الخاصية المحذوفة
echo $obj->name; // لا يظهر أي شيء لأنها حذفت


// 9. __toString()

class MyClass {
    public function __toString() {
        return "This is a string representation of the object.";
    }
}

$obj = new MyClass();
echo $obj; // الإخراج: This is a string representation of the object.


// 10. __invoke()

class MyClass {
    public function __invoke($param) {
        echo "Object called with parameter: $param";
    }
}

$obj = new MyClass();
$obj("Hello!"); // الإخراج: Object called with parameter: Hello!


// 11. __clone()

class MyClass {
    public $name;

    public function __clone() {
        $this->name = "Cloned: " . $this->name;
    }
}

$obj1 = new MyClass();
$obj1->name = "Ali";
$obj2 = clone $obj1;

echo $obj2->name; // الإخراج: Cloned: Ali


// 12. __debugInfo()

class MyClass {
    private $secret = "Hidden value";

    public function __debugInfo() {
        return [
            "info" => "This is debug info",
            "secret" => $this->secret,
        ];
    }
}

$obj = new MyClass();
var_dump($obj);


// 13. __sleep()

class MyClass {
    public $name;
    public $age;
    private $password;

    public function __construct($name, $age, $password) {
        $this->name = $name;
        $this->age = $age;
        $this->password = $password;
    }

    // تحديد الخصائص التي سيتم تسلسلها
    public function __sleep() {
        echo "Preparing to serialize...\n";
        return ['name', 'age']; // استبعاد الخاصية 'password'
    }
}

$obj = new MyClass("Ali", 25, "secretPassword");

// تسلسل الكائن
$serialized = serialize($obj);
echo "Serialized data: $serialized\n";


// 14. __wakeup()

class MyClass {
    public $name;

    public function __wakeup() {
        echo "Object unserialized and ready!\n";
    }
}

$serialized = 'O:7:"MyClass":1:{s:4:"name";s:3:"Ali";}';
$obj = unserialize($serialized);
echo $obj->name; // Ali



// 15.__set_state()

class MyClass {
    public $name;
    public $age;

    public static function __set_state($array) {
        return new self($array['name'], $array['age']);
    }

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
}

$exported = var_export(new MyClass("Ali", 25), true);
eval('$obj = ' . $exported . ';');
echo $obj->name; // Ali





