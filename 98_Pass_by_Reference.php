<?php
//refrence (addresh value) se bhi data ko call kiya ja shak ta hai 

$n = 2;
echo "value of n = $n <br />";
function add(&$a)                               //$n=$a=2 // 4 replace by 2
{
    echo "value inside funcation $a <br/>";     //2
    $a=4;
    echo "value inside funcation $a <br/>";     //4 //read bye $a=4 value
}
add($n);  //1. $n ko $a ke liya call kare ga then 2. time $n ki value 4          
    // 
echo "value of n=$n <br />";                    //4

// output
// value of n = 2
// value inside funcation 2
// value inside funcation 4
// value of n=4

?>