<?php
// imp   => double arrow "key/index" ko generate karta hai
// create key/index pair in array, this iten left => key/index ya right => key/index
/*
    index/key       value
    name[0]          100
    name[1]          200
    name[2]          300
*/


// syntex: $array_name=array("key1" => value1, "key2" => value2, "key3" => value3)  


// left => key/index
//"key" create liya gaya hai rohan ke liya 
$name=array(1=>"rohan", 5=>"sonu", 8=>"raju");
echo $name[5];
// output
// sonu 

// right => key/index
//"key" create liya gaya hai rohan ke liya  jo us ka serial no hai
$name=array("rohan" => 1, "sonu" => 5, "raju" => 8);
echo $name["rohan"];
//multipa array function ke value ko print karne ke for loop use hoga

// output
// 1

?>