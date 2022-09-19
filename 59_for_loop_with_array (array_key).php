<?php
// $key    a   b   c   d
// $value  1   2   3   4           
            // latest

//Key ko print kare ke liya
// $name = array("a", "b", "c", "d", "e");
// foreach($name as $value){
// echo "$value" . "<br />";
// }

// outputa
// b
// c
// d
// e
            
//value or key dono ko print karee ke liya  =>
$name = array("a", "b", "c", "d", "e");
foreach($name as $key => $value){         //dono ko declear karne ke liya ,let  $key (0) => $value ("a")
    echo "$key " . " $value" . "<br />"; //key mai index ka key show kare ga
}

// output
// 0 a
// 1 b
// 2 c
// 3 d
// 4 e

// note: foreach() mai array_keys ka use nhi hota hai

?>