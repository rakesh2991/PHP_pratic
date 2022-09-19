<?php
// ye mutipal data ko shaow kare ga
$fee["rk"]["php"]=10;      
$fee["rk"]["java"]=20;
$fee["rk"]["css"]=30;

$fee["rs"]["pyhton"]=10;      
$fee["rs"]["django"]=20;
$fee["rs"]["xml"]=30;

$fee["sr"]["c++"]=10;     
$fee["sr"]["ruby"]=20;
$fee["sr"]["xml"]=30;
    //old method
$keys = array_keys($fee);      ////use a array_keys function use in for loop 
for($i=0; $i<count($keys); $i++)            //first row
{
    // fee_keys $j ke liya create kiya gaya hai
    $fee_keys = array_keys($fee[$keys[$i]]);   //array_key function hai is liya new variable $fee_keys create kya 
    for($j=0; $j<count($fee_keys); $j++)    //secound row
    {
        echo ($keys[$i] . " " . $fee_keys[$j] . " " . $fee[$keys[$i]] [$fee_keys[$j]] . " ");
    }
    echo "<br>";
}
// ye mutipal data ko shaow kare ga
// output
// rk php 10 rk java 20 rk css 30
// rs pyhton 10 rs django 20 rs xml 30
// sr c++ 10 sr ruby 20 sr xml 30
?>