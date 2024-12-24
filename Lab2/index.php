<?php
// تعريف بعض المصفوفات 
$array1 = [1, 2, 3, 4, 5];
$array2 = ['a' => 1, 'b' => 2, 'c' => 3];
$array3 = [2, 4, 6, 8, 10];
$array4 = [1, 2, 2, 3, 4, 4, 5];
$array5 = ['a' => 1, 'b' => [2, 3]];
$array6 = ['a' => 1, 'b' => 2];
$array7 = ['a' => 3, 'c' => 4];


// 1. array_push() - إضافة عناصر إلى نهاية المصفوفة
array_push($array1, 6, 7);
echo "array_push:";
print_r($array1). "<br>";


// 2. array_pop() - إزالة العنصر الأخير من المصفوفة
array_pop($array1);
echo "array_pop: ";
print_r($array1) . "\n";


// 3. array_shift() - إزالة العنصر الأول من المصفوفة
array_shift($array1);
echo "array_shift: ";
print_r($array1);


// 4. array_unshift() - إضافة عناصر إلى بداية المصفوفة
array_unshift($array1, 0);
echo "array_unshift: ";
print_r($array1);


// 5. array_merge() - دمج مصفوفتين أو أكثر
$mergedArray = array_merge($array1, $array3);
echo "array_merge: ";
print_r($mergedArray);


// 6. array_slice() - استخراج جزء من المصفوفة
$slicedArray = array_slice($array1, 1, 3);
echo "array_slice: ";
print_r($slicedArray);


// 7. array_splice() - إزالة جزء من المصفوفة وإضافة عناصر جديدة
array_splice($array1, 2, 2, [10, 11]);
echo "array_splice: ";
print_r($array1);


// 8. array_search() - البحث عن قيمة معينة في المصفوفة
$index = array_search(10, $array1);
echo "array_search: العنصر 10 موجود في الفهرس " . $index . "\n";


// 9. in_array() - التحقق مما إذا كانت القيمة موجودة في المصفوفة
$result = in_array(3, $array1);
echo "in_array: ";
var_dump($result);


// 10. array_key_exists() - التحقق من وجود مفتاح معين في المصفوفة
$keyExists = array_key_exists('b', $array2);
echo "array_key_exists: ";
var_dump($keyExists);


// 11. array_map() - تطبيق دالة على كل عنصر في المصفوفة
$doubledArray = array_map(function($n) { return $n * 2; }, $array3);
echo "array_map: ";
print_r($doubledArray);


// 12. array_filter() - تصفية المصفوفة باستخدام دالة
$evenArray = array_filter($array3, function($n) { return $n % 2 == 0; });
echo "array_filter: ";
print_r($evenArray);


// 13. array_reduce() - تقليص المصفوفة إلى قيمة واحدة
$sum = array_reduce($array1, function($carry, $item) { return $carry + $item; });
echo "array_reduce: مجموع العناصر في المصفوفة هو " . $sum . "\n";


// 14. array_keys() - الحصول على جميع المفاتيح في المصفوفة
$keys = array_keys($array2);
echo "array_keys: ";
print_r($keys);


// 15. array_values() - الحصول على جميع القيم في المصفوفة
$values = array_values($array2);
echo "array_values: ";
print_r($values);


// 16. count() - حساب عدد العناصر في المصفوفة
echo "count: عدد العناصر في المصفوفة هو " . count($array1) . "<br>";


// 17. array_flip() - عكس المصفوفة بحيث تصبح القيم مفاتيح والمفاتيح قيمًا
$flipped = array_flip($array2);
echo "array_flip: ";
print_r($flipped);


// 18. array_merge_recursive() - دمج مصفوفتين مع الحفاظ على القيم المكررة
$mergedRecursive = array_merge_recursive($array1, $array3);
echo "array_merge_recursive: ";
print_r($mergedRecursive);


// 19. array_diff() - مقارنة المصفوفات وإرجاع العناصر الفريدة في المصفوفة الأولى
$diff = array_diff($array1, $array3);
echo "array_diff: ";
print_r($diff);


// 20. array_diff_assoc() - مقارنة المصفوفات مع أخذ المفاتيح في الاعتبار
$diffAssoc = array_diff_assoc($array1, $array3);
echo "array_diff_assoc: ";
print_r($diffAssoc);


// 21. array_intersect() - الحصول على العناصر المشتركة بين مصفوفتين
$intersect = array_intersect($array1, $array3);
echo "array_intersect: ";
print_r($intersect);


// 22. array_intersect_assoc() - الحصول على العناصر المشتركة بين المصفوفات مع المفاتيح
$intersectAssoc = array_intersect_assoc($array1, $array3);
echo "array_intersect_assoc: ";
print_r($intersectAssoc);


// 23. array_unique() - إزالة القيم المكررة من المصفوفة
$unique = array_unique($array4);
echo "array_unique: ";
print_r($unique);


// 24. array_reverse() - عكس ترتيب العناصر في المصفوفة
$reversed = array_reverse($array3);
echo "array_reverse: ";
print_r($reversed);


// 25. array_search() - البحث عن قيمة في المصفوفة وإرجاع مفتاحها
$search = array_search(3, $array1);
echo "array_search: العنصر 3 موجود في الفهرس " . $search . "\n";


// 26. array_flip() - عكس المصفوفة بحيث تصبح القيم مفاتيحًا
$flipped = array_flip($array2);
echo "array_flip: ";
print_r($flipped);


// 27. array_walk() - تطبيق دالة على كل عنصر في المصفوفة
array_walk($array3, function(&$item) {
    $item = $item * 2;  // ضرب كل عنصر في 2
});
echo "array_walk: ";
print_r($array3);


// 28. array_walk_recursive() - تطبيق دالة على العناصر في المصفوفات المتداخلة
array_walk_recursive($array5, function(&$item) {
    $item = $item * 2;  // ضرب كل عنصر في 2
});
echo "array_walk_recursive: ";
print_r($array5);


// 29. array_sum() - حساب مجموع القيم في المصفوفة
$sum = array_sum($array1);
echo "array_sum: مجموع العناصر هو " . $sum . "\n";


// 30. array_product() - حساب حاصل ضرب القيم في المصفوفة
$product = array_product($array3);
echo "array_product: حاصل ضرب العناصر هو " . $product . "\n";


// 31. array_rand() - اختيار عنصر عشوائي من المصفوفة
$randomKey = array_rand($array1);
echo "array_rand: العنصر العشوائي هو " . $array1[$randomKey] . "\n";


// 32. array_chunk() - تقسيم المصفوفة إلى مصفوفات أصغر
$chunked = array_chunk($array3, 2);
echo "array_chunk: ";
print_r($chunked) . "<br>";


// 33. array_diff_key() - مقارنة المفاتيح فقط بين المصفوفات
$diffKey = array_diff_key($array6, $array7);
echo "array_diff_key: ";
print_r($diffKey) . "<br>";


// 34. array_intersect_key() - الحصول على العناصر المشتركة بناءً على المفاتيح
$intersectKey = array_intersect_key($array6, $array7);
echo "array_intersect_key:" ;
print_r($intersectKey) . "<br/>";
echo"<br>-------------------------------------------------------------------";



// تعريف بعض السلاسل النصية 
$string1 = "Hello World!";
$string2 = "   PHP String Functions Example   ";
$string3 = "php is a powerful language";
$string4 = "apple,banana,orange";

// 1. strlen() - الحصول على طول السلسلة النصية
echo "1. strlen: طول السلسلة النصية '$string1' هو: " . strlen($string1) . "\n";

// 2. strpos() - البحث عن أول ظهور لمحتوى داخل السلسلة النصية
$position = strpos($string1, "World");
echo "2. strpos: موقع الكلمة 'World' في السلسلة النصية هو: $position\n";

// 3. strrpos() - البحث عن آخر ظهور لمحتوى داخل السلسلة النصية
$lastPosition = strrpos($string1, "o");
echo "3. strrpos: آخر ظهور للحرف 'o' في السلسلة النصية هو: $lastPosition\n";

// 4. substr() - استخراج جزء من السلسلة النصية
$substring = substr($string1, 6, 5);
echo "4. substr: جزء من السلسلة النصية من الفهرس 6 إلى 5 أحرف هو: '$substring'\n";

// 5. strtolower() - تحويل السلسلة النصية إلى أحرف صغيرة
$lowercaseString = strtolower($string3);
echo "5. strtolower: السلسلة النصية بعد تحويلها إلى أحرف صغيرة: '$lowercaseString'\n";

// 6. strtoupper() - تحويل السلسلة النصية إلى أحرف كبيرة
$uppercaseString = strtoupper($string3);
echo "6. strtoupper: السلسلة النصية بعد تحويلها إلى أحرف كبيرة: '$uppercaseString'\n";

// 7. ucwords() - تحويل أول حرف من كل كلمة إلى حرف كبير
$capitalizedString = ucwords($string3);
echo "7. ucwords: السلسلة النصية بعد تحويل أول حرف من كل كلمة إلى كبير: '$capitalizedString'\n";

// 8. trim() - إزالة المسافات البيضاء من بداية ونهاية السلسلة النصية
$trimmedString = trim($string2);
echo "8. trim: السلسلة النصية بعد إزالة المسافات البيضاء من البداية والنهاية: '$trimmedString'\n";

// 9. ltrim() - إزالة المسافات البيضاء من بداية السلسلة النصية
$leftTrimmedString = ltrim($string2);
echo "9. ltrim: السلسلة النصية بعد إزالة المسافات البيضاء من البداية: '$leftTrimmedString'\n";

// 10. rtrim() - إزالة المسافات البيضاء من نهاية السلسلة النصية
$rightTrimmedString = rtrim($string2);
echo "10. rtrim: السلسلة النصية بعد إزالة المسافات البيضاء من النهاية: '$rightTrimmedString'\n";

// 11. str_replace() - استبدال جزء من السلسلة النصية
$replacedString = str_replace("Hello", "Hi", $string1);
echo "11. str_replace: السلسلة النصية بعد استبدال 'Hello' بـ 'Hi': '$replacedString'\n";

// 12. explode() - تقسيم السلسلة النصية إلى مصفوفة باستخدام فاصل معين
$arrayFromString = explode(",", $string4);
echo "12. explode: السلسلة النصية بعد تقسيمها إلى مصفوفة: ";
print_r($arrayFromString);

// 13. implode() - دمج مصفوفة إلى سلسلة نصية باستخدام فاصل معين
$implodedString = implode("-", $arrayFromString);
echo "13. implode: المصفوفة بعد دمجها إلى سلسلة نصية مع فاصل '-': '$implodedString'\n";

// 14. str_repeat() - تكرار السلسلة النصية لعدد معين من المرات
$repeatedString = str_repeat("PHP ", 3);
echo "14. str_repeat: السلسلة النصية بعد تكرار 'PHP' ثلاث مرات: '$repeatedString'\n";

// 15. str_shuffle() - خلط حروف السلسلة النصية
$shuffledString = str_shuffle($string1);
echo "15. str_shuffle: السلسلة النصية بعد خلط حروفها: '$shuffledString'\n";

// 16. substr_count() - عد عدد مرات ظهور جزء معين من السلسلة النصية
$count = substr_count($string1, "o");
echo "16. substr_count: عدد مرات ظهور الحرف 'o' في السلسلة النصية هو: $count\n";

// 17. trim() - إزالة جميع المسافات البيضاء من البداية والنهاية
$stringWithSpaces = "  This is a test string  ";
echo "17. trim: السلسلة النصية بعد إزالة المسافات الزائدة: '" . trim($stringWithSpaces) . "'\n";

// 18. wordwrap() - لف السلسلة النصية لعدة أسطر عند الوصول إلى عدد معين من الأحرف
$wrappedString = wordwrap($string1, 5, "\n", true);
echo "18. wordwrap: السلسلة النصية بعد لفها إلى أسطر: \n$wrappedString\n";

// 19. strpos() - البحث عن موضع كلمة داخل السلسلة النصية
$positionWord = strpos($string1, "World");
echo "19. strpos: موضع الكلمة 'World' هو: $positionWord\n";

// 20. htmlspecialchars() - تحويل الأحرف الخاصة في السلسلة النصية إلى رموز HTML
$htmlString = "<div>This is a 'test' & 'example'</div>";
$escapedHtmlString = htmlspecialchars($htmlString);
echo "20. htmlspecialchars: السلسلة النصية بعد تحويل الأحرف الخاصة إلى رموز HTML: '$escapedHtmlString'\n";

// 21. strcmp() - مقارنة سلسلتين نصيتين (حساس لحالة الأحرف)
$comparison = strcmp($string3, "php is a powerful language");
echo "21. strcmp: نتيجة مقارنة السلسلة النصية مع 'php is a powerful language': $comparison\n";

// 22. strcasecmp() - مقارنة سلسلتين نصيتين (غير حساس لحالة الأحرف)
$comparisonIgnoreCase = strcasecmp($string3, "PHP IS A POWERFUL LANGUAGE");
echo "22. strcasecmp: نتيجة مقارنة السلسلة النصية مع 'PHP IS A POWERFUL LANGUAGE' (غير حساس لحالة الأحرف): $comparisonIgnoreCase\n";

// 23. strstr() - البحث عن أول ظهور لجملة أو حرف في السلسلة النصية
$foundString = strstr($string3, "powerful");
echo "23. strstr: أول ظهور للكلمة 'powerful' في السلسلة النصية هو: '$foundString'\n";

// 24. substr_replace() - استبدال جزء من السلسلة النصية
$replacedSubstring = substr_replace($string1, "Universe", 6, 5);
echo "24. substr_replace: السلسلة النصية بعد استبدال 'World' بـ 'Universe': '$replacedSubstring'\n";

// 25. number_format() - تنسيق الرقم كسلسلة نصية مع فواصل الأرقام
$number = 1234567.89;
$formattedNumber = number_format($number, 2);
echo "25. number_format: الرقم $number بعد تنسيقه هو: $formattedNumber\n";

// 26. str_pad() - إضافة محارف إلى السلسلة النصية حتى تصل إلى طول معين
$paddedString = str_pad("PHP", 10, "*");
echo "26. str_pad: السلسلة النصية 'PHP' بعد إضافة '*' حتى طول 10 هي: '$paddedString'\n";

// 27. str_ireplace() - استبدال جزء من السلسلة النصية (غير حساس لحالة الأحرف)
$caseInsensitiveReplace = str_ireplace("hello", "Hi", $string1);
echo "27. str_ireplace: السلسلة النصية بعد استبدال 'hello' بـ 'Hi' (غير حساس لحالة الأحرف): '$caseInsensitiveReplace'\n";

// 28. strchr() - البحث عن أول ظهور لجملة أو حرف في السلسلة النصية (نفس `strstr`)
$foundChar = strchr($string3, "a");
echo "28. strchr: أول ظهور للحرف 'a' في السلسلة النصية هو: '$foundChar'\n";

// 29. addslashes() - إضافة الشرطة المائلة لتأمين السلسلة النصية
$escapedString = addslashes("This is a test with 'quotes' and \"double quotes\".");
echo "29. addslashes: السلسلة النصية بعد إضافة الشرطة المائلة: '$escapedString'\n";

// 30. stripslashes() - إزالة الشرطة المائلة من السلسلة النصية
$unescapedString = stripslashes($escapedString);
echo "30. stripslashes: السلسلة النصية بعد إزالة الشرطة المائلة: '$unescapedString'\n";

?>




