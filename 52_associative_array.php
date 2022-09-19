<?php

// syntex: $array_name["key"] = value;

//array ke data ko value dene ke liya
// $name["rakesh"]=500;
// 1. use
// echo $name["rakesh"];
// 2. use
// echo "rakesh value" . $name["rakesh"];
// 3. use
// echo "rakesh value {$name["rakesh"]}";

// function concept mai double arrow use hota hai
// program 2
// $name=array("rohan" => 1, "sonu" => 5, "raju" => 8);
// echo $name["rohan"];

// output
// 1

// $name=array(1=>"rohan", 5=>"sonu", 8=>"raju");
// echo $name[5];

// output
// sonu

            //old concept
// program 1
// $fees["a"] = 500;
// $fees["b"] = 600;
// $fees["c"] = 700;
// $fees["d"] = 800;

// // c ka feees dekhana hai
// // echo $fees["c"];
// // multipal dekhan ho tho
// echo $fees["b"] . "<br>";
// echo $fees["a"] . "<br>";
// echo $fees["d"] . "<br>";

// // Output
// // 600
// // 500
// // 800

// program 2
// $fees=array("a"=>500, "b"=>600, "c"=>700, "d"=>800);
// echo $fees["a"];
// echo $fees["2"];    //is not use

// // Output
// // 500
// // Notice: Undefined offset: 2 in C:\xampp\htdocs\core_php\52_associative_array.php on line 50

// multipal
// echo $fees["a"] . "<br>";
// echo $fees["c"] . "<br>";
// echo $fees["c"] . "<br>";

// output
// 500
// 700
// 700
?>