<?php
$name = array("a" => 500, "b" => 600, "c" => 700, "d" => 800, "e" => 900);
//array ke key ko dekhane ke liya
//create a new veriable
$keys = array_keys($name);    //array_keys($name) key generate kare ga print 500 600 700
// echo $keys[3];  //single data print only
$i=0;
while($i<count($keys))
{
    // echo $keys[$i] . "<br />"; //key ko print kiya  "a b c d e f'
    echo $keys[$i] . " " . $name[$keys[$i]] .  "<br />";
    $i++;
}

// output
// a 500
// b 600
// c 700
// d 800
// e 900

?>