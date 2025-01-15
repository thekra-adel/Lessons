<?php
// ****************Regular Expression Functions*****************

// 1- preg_match()
$pattern = "/\d+/"; // بحث عن رقم
$text = "The price is 100 dollars";
if (preg_match($pattern, $text, $matches)) {
    echo "تم العثور على تطابق: " . $matches[0]; // سيطبع 100
}


// 2- preg_match_all()
$pattern = "/\d+/"; // بحث عن كل الأرقام
$text = "I have 2 apples and 10 bananas.";
preg_match_all($pattern, $text, $matches);
print_r($matches); // يعرض جميع الأرقام في النص


// 3- preg_replace()
$pattern = "/apple/";
$text = "I like apple and apple pie.";
$new_text = preg_replace($pattern, "orange", $text);
echo $new_text; // يعرض "I like orange and orange pie."


// 4- preg_split()
$pattern = "/\s+/"; // تقسيم النص باستخدام المسافات
$text = "This is a test string.";
$words = preg_split($pattern, $text);
print_r($words); // يعرض مصفوفة من الكلمات


// 5- preg_replace_callback()
$pattern = "/(\d+)/"; // بحث عن أرقام
$text = "The price is 100 dollars and 50 cents.";
$text = preg_replace_callback($pattern, function($matches) {
    return $matches[0] * 2; // ضرب الأرقام في 2
}, $text);
echo $text; // يعرض "The price is 200 dollars and 100 cents."


// *************Regular Expression Modifiers****************

// 1- i
$pattern = "/php/i";  // يتطابق مع "php"، "PHP"، "Php"، إلخ.
$text = "I love PHP";
preg_match($pattern, $text, $matches);
print_r($matches);


// 2- m
$pattern = "/^foo/m";  // يتطابق مع "foo" في بداية أي سطر.
$text = "foo\nbar\nfoo";
preg_match_all($pattern, $text, $matches);
print_r($matches);


// 3- s
$pattern = "/foo.bar/s";  // النقطة تتطابق مع أي شيء، بما في ذلك الأسطر الجديدة.
$text = "foo\nbar";
preg_match($pattern, $text, $matches);
print_r($matches);


// 4- x
$pattern = "/foo
bar/x";  // يسمح باستخدام المسافات والتعليقات
$text = "foobar";
preg_match($pattern, $text, $matches);
print_r($matches);


// 5- A 
$pattern = "/^foo/A";  // سيبحث فقط في بداية النص
$text = "foobar";
preg_match($pattern, $text, $matches);
print_r($matches);


// 6- D 
$pattern = "/^foo/D";  // سيبحث فقط في نهاية النص
$text = "foobar";
preg_match($pattern, $text, $matches);
print_r($matches);


// **************Regular Expression Patterns*************

// [abc]
$text = "apple banana cherry";
$pattern = "/[abc]/";
preg_match_all($pattern, $text, $matches);
print_r($matches);


// [^abc]
$text = "apple banana cherry";
$pattern = "/[^abc]/";
preg_match_all($pattern, $text, $matches);
print_r($matches);


//[a-z]
$text = "apple 123 banana";
$pattern = "/[a-z]/";
preg_match_all($pattern, $text, $matches);
print_r($matches);


//[A-z]
$text = "apple 123 Banana";
$pattern = "/[A-z]/";
preg_match_all($pattern, $text, $matches);
print_r($matches);


//[A-Z]
$text = "apple 123 Banana";
$pattern = "/[A-Z]/";
preg_match_all($pattern, $text, $matches);
print_r($matches);


//[123]
$text = "apple 123 banana 456";
$pattern = "/[123]/";
preg_match_all($pattern, $text, $matches);
print_r($matches);


// [0-5]
$text = "apple 123456 banana";
$pattern = "/[0-5]/";
preg_match_all($pattern, $text, $matches);
print_r($matches);


//[0-9]
$text = "apple 123456 banana";
$pattern = "/[0-9]/";
preg_match_all($pattern, $text, $matches);
print_r($matches);


// ***************Metacharacters*****************

// 1- (.)
$text = "apple";
$pattern = "/a.p/";
preg_match($pattern, $text, $matches);
print_r($matches);


// 2-  (|)
$text = "apple banana";
$pattern = "/apple|banana/";
preg_match($pattern, $text, $matches);
print_r($matches);


// 3- (^)
$text = "apple banana";
$pattern = "/^apple/";
preg_match($pattern, $text, $matches);
print_r($matches);


// 4-  ($)
$text = "apple banana";
$pattern = "/banana$/";
preg_match($pattern, $text, $matches);
print_r($matches);


// 5- \d
$text = "The number is 1234.";
$pattern = "/\d/";
preg_match_all($pattern, $text, $matches);
print_r($matches);


// 6- \D
$text = "The number is 1234.";
$pattern = "/\D/";
preg_match_all($pattern, $text, $matches);
print_r($matches);


// 7- \s
$text = "Hello World\nNew Line";
$pattern = "/\s/";
preg_match_all($pattern, $text, $matches);
print_r($matches);


// 8- \S
$text = "Hello World\nNew Line";
$pattern = "/\S/";
preg_match_all($pattern, $text, $matches);
print_r($matches);


// 9- \w
$text = "Hello_123";
$pattern = "/\w/";
preg_match_all($pattern, $text, $matches);
print_r($matches);

// 10- \W
$text = "Hello_123!";
$pattern = "/\W/";
preg_match_all($pattern, $text, $matches);
print_r($matches);


// 11-  \b
$text = "Hello world";
$pattern = "/\bworld\b/";
preg_match($pattern, $text, $matches);
print_r($matches);


// **************Quantifiers****************
// 1-  (+)
$text = "aaa";
$pattern = "/a+/";
preg_match($pattern, $text, $matches);
print_r($matches);


// 2-  (*)
$text = "aaa";
$pattern = "/a*/";
preg_match($pattern, $text, $matches);
print_r($matches);


// 3- (?)
$text = "apple";
$pattern = "/a?p/";
preg_match($pattern, $text, $matches);
print_r($matches);


// 4-  {n}
$text = "aaaa";
$pattern = "/a{3}/";
preg_match($pattern, $text, $matches);
print_r($matches);


// 5- {n,}
$text = "aaaaa";
$pattern = "/a{3,}/";
preg_match($pattern, $text, $matches);
print_r($matches);


// 6- {n,m}
$text = "aaaa";
$pattern = "/a{2,4}/";
preg_match($pattern, $text, $matches);
print_r($matches);

?>
