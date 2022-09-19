<?php
$name=array("a","b","c","d");
//data ko ek ek kar ke dekhana hai
$i=0;
while($i<count($name))       //array index value se find karta hai data ko.
{
    echo $name[$i] . "<br />";
    $i++;
}

// output
// a
// b
// c
// d
?>