<?php
//------------------foreach loop with associative (=> double arrow) array in php--------
// key      a        b        c      d
// value    500     600      700    800

//value print kare ke liya
// $name = array("a" => 500, "b" => 600, "c" => 700, "d" => 800, "e" => 900);
// foreach($name as $value){     //double arrow "=>" use karne se foreach mai value he show kare ga   
//     echo "$value" . "<br />";
// }

// output
// 500
// 600
// 700
// 800
// 900

//value or key dono ko print karee ke liya  =>
// $name = array("a" => 500, "b" => 600, "c" => 700, "d" => 800, "e" => 900);
// foreach($name as $key => $value){        //dono ko declear karne ke liya ,let  $key (a) => $value (500)
//     echo "$key " . "=" . " $value" . "<br />";
// }

// output
// a = 500
// b = 600
// c = 700
// d = 800
// e = 900

?>