<?php

function total($num1, $num2)   //defult value    
{
    $sum = $num1 + $num2;
    $sub = $num1 - $num2;
    $multi = $num1 * $num2;
    $div = $num1 / $num2;
    //convert a array 
    $solucation = array($sum, $sub,  $multi, $div);
    // pass by value in a array
    return $solucation;
}
$operater = total(4,2);  //array mai direct function ko call nhi kar shak te, create a virable
// echo $operater[0];
//print karen ke multi pal index value use hoga
echo "sum " . $operater[0] . "<br />";
echo "sub " . $operater[1] . "<br />";
echo "multi " . $operater[2] . "<br />";
echo "div " . $operater[3] . "<br />";
?>