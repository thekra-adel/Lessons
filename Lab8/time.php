<?php
 //1- date() 
 echo date("Y-m-d H:i:s"); 


 //2- time()
 echo time(); 


 //3- strtotime()
 echo strtotime("2025-01-01"); 


 //4- mktime()
 echo mktime(0, 0, 0, 1, 1, 2025); 


 //5- getdate()
 print_r(getdate()); 


 //6- date_create()
 $date = date_create("2025-01-01");
 echo date_format($date, "Y-m-d"); 

 
 //7- date_add()
 $date = date_create("2025-01-01");
date_add($date, date_interval_create_from_date_string("10 days"));
echo date_format($date, "Y-m-d"); 


//8- date_sub()
$date = date_create("2025-01-01");
date_sub($date, date_interval_create_from_date_string("10 days"));
echo date_format($date, "Y-m-d"); 


//9- checkdate()
if (checkdate(2, 29, 2025)) {
    echo "التاريخ صالح!";
} else {
    echo "التاريخ غير صالح!";
}


//10- gettimeofday()
print_r(gettimeofday());


//11- microtime()
echo microtime(true); 


//12- sleep()
echo "قبل التأخير\n";
sleep(2); 
echo "بعد التأخير\n";


//13- date_default_timezone_set()
date_default_timezone_set("Asia/Baghdad");
echo date("Y-m-d H:i:s"); 


// 14- timezone_identifiers_list()
print_r(timezone_identifiers_list()); 


//15- DateTime و DateTimeZone
$datetime = new DateTime("2025-01-01 12:00:00", new DateTimeZone("Asia/Baghdad"));
echo $datetime->format("Y-m-d H:i:s"); 


?>