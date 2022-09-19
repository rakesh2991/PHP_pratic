<?php
// pass by value means value ko pass kese kare


// $n = 2;                                 //$n  name value create kiya
// echo "value of n = $n <br />";
// function add($a)    // $n=$a=2,                     //copy metho use hu aa hai
// {
//     $a=4;       //4 replace by 2
// }
// add($n);   //declear hoga "$n" ke value "2" hai then "$n" hai "$a" ko phale call kar rha hai.

// echo "value of n=$n <br />";

// // output:
// // value of n = 2
// // value of n=2



$n = 2;
echo "value of n = $n <br />";
function add($a)    // $n=$a=2,  4 replace by 2
{
    echo "value inside funcation $a <br/>";  //2
    $a=4;
    echo "value inside funcation $a <br/>";  //4       //$a ka value 4 ho jaye ga
}
add($n);            // declear hoga $n ke value 2 hai add($n) e liya

echo "value of n=$n <br />";

// output:
// value of n = 2
// value inside funcation 2
// value inside funcation 4
// value of n=2


?>