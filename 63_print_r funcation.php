<?php
//  print_f function is a array function, use a debuging use a array code

//array ke function ko dekhane ke liya use kiya jata hai.

/*
syntex: print_r($array_name, Bool_Return);  //bool_return can be true and false, by default is false.
*/

// $name [0] = "a";
// $name [1] = "b";
// $name [2] = "c";
// $name [3] = "d";

// or

$name = array("a", "b", "c", "d");

// Both use

// print_r($name);   // first method (short cut)   it willl be print information,  data ko declear kiya hai

// o/p
// Array ( [0] => a [1] => b [2] => c [3] => d ) //key show kare ga


$result = print_r($name, True);      // second method
echo $result;            

//output
// Array ( [0] => a [1] => b [2] => c [3] => d )

?>