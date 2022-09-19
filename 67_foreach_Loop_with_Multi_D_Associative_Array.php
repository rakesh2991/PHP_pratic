<?php
$fee["rk"]["php"]=10;      
$fee["rk"]["java"]=20;
$fee["rk"]["css"]=30;

$fee["rs"]["pyhton"]=10;      
$fee["rs"]["django"]=20;
$fee["rs"]["xml"]=30;

$fee["sr"]["c++"]=10;     
$fee["sr"]["ruby"]=20;
$fee["sr"]["xml"]=30;

// first  sample data display
// foreach($fee as $values)
// {
//     foreach($values as $detial)
//     {
//         echo $detial . " ";
//     }
//     echo "<br>";
// }

// // output 
// 10 20 30
// 10 20 30
// 10 20 30

//   second  sample data display array index value position 
foreach($fee as $keys=>$values)      //select row value data  "$keys"
{
    foreach($values as $key=>$detial)  //select row detials data value  "$key"
    {
        echo $keys . " " . $key . " " . $detial . " ";
    }
    echo "<br>";
}

// output
// rk php 10 rk java 20 rk css 30
// rs pyhton 10 rs django 20 rs xml 30
// sr c++ 10 sr ruby 20 sr xml 30
?>