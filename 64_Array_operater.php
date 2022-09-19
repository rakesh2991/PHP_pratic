<?php
/*
$a + $b         union               both compair
$a == $b        Equality            same key value pair $a and $b
$a === $b       Identity            TRUE tab hoga $a and $b same key/valur,same order, datatype
$a != $b        INequality          TRUE tab hoga $a is not equal $b
$a <> $b        inequality          TRUE tab hoga $a is not equal $b 
$a !== $b       Non-identity        TRUE if $a is not identical to $b (same key/valur,same order, datatype)
*/

/*
// 1. $a + $b         union...  both value a compair 

$a = array("a" => 10, "b" => 20, "c" => 30, "d" => 40);
$b = array("a" => "php", "b" => "java", "c" => "python", "d" => "c", "e" => "c++");

// $result = $a+$b;         // 1 
$result = $b+$a;            // 2   
print_r($result);

// output
// Array ( [a] => 10 [b] => 20 [c] => 30 [d] => 40 [e] => c++ )         //1
//Array ( [a] => php [b] => java [c] => python [d] => c [e] => c++ )      //2
*/

// 2. $a == $b        Equality
/*
                //1 methon same both value same
$a = array("a" => 10, "b" => 20, "c" => 30, "d" => 40);
$x = array("a" => 10, "b" => 20, "c" => 30, "d" => 40);
if($a==$x){
    echo "both array key/value pair True";
}
else{
    echo "key/value pair fail";
}

// output
// both array key/value pair True
*/

/*
               //2 methon replace value
$a = array("a" => 10, "b" => 20, "c" => 30, "d" => 40);
$x = array("b" => 20, "a" => 10, "c" => 30, "d" => 40);             //value replace
if($a==$x){
    echo "both array key/value pair True";
}
else{
    echo "key/value pair fail";
}

// output
// both array key/value pair True
*/

/*
             //3 methon same both value same
$a = array("a" => 10, "b" => 20, "c" => 30, "d" => 40);
$x = array("a" => "php", "b" => "java", "c" => "python", "d" => "c");             //value replace
if($a==$x){
    echo "both array key/value pair True";
}
else{
    echo "key/value pair fail";
}

// output
// key/value pair fail
*/


//3.  $a===$b Identity
$a = array("a" => 10, "b" => 20, "c" => 30, "d" => 40);
// $x = array("a" => 10, "b" => 20, "c" => 30, "d" => 40);                  //1. same value
// $x = array("b" => 20, "a" => 10, "c" => 30, "d" => 40);                     // 2. value replace
$x = array("a" => "php", "b" => "java", "c" => "python", "d" => "c");    //3. value string

if($a==$x){
    echo "both array key/value pair True";
}
else{
    echo "key/value pair fail";
}

// output
//1.  both array key/value pair True
//2. both array key/value pair True




?>