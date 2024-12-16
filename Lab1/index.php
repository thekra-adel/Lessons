<?php
//primitive type
//string
$name='thekra';

//integer
$age=21;

//float
$price=99.9;

//boolean
$isActive=true;

//composite type
//array
$fruits= array("apple","mango","banana");

//special type
//NULL
$nullValue= null;

// IF statement
$number = 15;
if ($number > 5){
    echo " the number is bigger than 5. <br>";
   
}


// IF ELSE statement
$number = 7;
if($number % 2 == 0){
    echo "the number is even.<br> ";
} else{
    echo "the number iss odd. <br>";
}


//FOR statement
$sum = 0;
for($i = 1; $i <= 15; $i++ ){
    $sum += $i;
}
echo "sum of numbers from 1 to 15 : $sum <br>";


//Foreach
$fruits= array("apple","mango","banana");
 
foreach($fruits as $fruit){
    echo $fruit ."<br>";
}


//WHILE 
 $count = 0;
 while($count <= 5){
    echo "the number is: $count <br>";
    $count++;
 }


//DO WHILE 
$count = 10;
do{
    echo "the number is: $count <br>";
    $count++;
}while($count <= 20);



//switch 
 $dayNumber = 5 ;
switch($dayNumber){
    case 1:
         echo "The day is Saturday <br>";
    break;
    case 2:
          echo "The day is Sunday <br>";
    break;
    case 3:
          echo "The day is Monday <br>";
    break;
    case 4:
          echo "The day is Tuesday<br>";
    break;
    case 5:
          echo "The day is Wednesday <br>";
    break;
    case 6: 
         echo "The day is Thursday <br>";
    break;
    case 7:
          echo "The day is Friday <br>";
    break;
}
  


//العمليات الحسابية

$num1 = 20;
$num2 = 5;

$sum = $num1 + $num2;
echo "ناتج الجمع:" .$sum. "<br>";

$difference = $num1 - $num2;
echo " ناتج الفرق:" .$difference. "<br>";

$product = $num1 * $num2;
echo " ناتج الضرب:" .$product. "<br>";

$qoutient = $num1 / $num2;
echo "ناتج القسمة:" .$qoutient. "<br>";

$remainder = $num1 % $num2 ;
echo "باقي القسمة :" .$remainder. "<br>";



//معاملات المقارنة
$number1 = 10;
$number2= 20;

if($number1 == $number2){
    echo " قيم المتغيرات متشابهة <br>";
}
else{
    echo " قيم المتغيرات مختلفة <br>";
}

if($number1 === $number2){
echo "القيم باعتبار نوع المتغيرات متشابه <br>";
} 
else{
    echo "القيم باعتبار نوع المتغيرات مختلف<br>";
}

if($number1 != $number2){
    echo "القيم غير متساوية<br>";
}

if($number1 !== $number2){
    echo "القيم باعتبار نوع المتغيرات غير متساوية<br>";
}

if( $number1 < $number2 ){
    echo "  العدد الاول اصغر من الثاني<br>";
}
else{
    echo "  العدد الاول ليس اصغر من الثاني<br>"; 
}

if( $number1 > $number2 ){
    echo "  العدد الاول اكبر من الثاني <br>";
}
else{
    echo " العدد الاول ليس اكبر من الثاني <br>"; 
}

if( $number1 <= $number2 ){
    echo "   العدد الاول اصغر من او يساوي الثاني <br>";
}
else{
    echo " العدد الاول ليس اصغر من او يساوي الثاني <br>"; 
}

if( $number1 >= $number2 ){
    echo "   العدد الاول اكبر من او يساوي الثاني <br>";
}
else{
    echo "  العدد الاول ليس اكبر من او يساوي الثاني <br>"; 
}
?>