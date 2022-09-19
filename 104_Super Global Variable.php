<?php
// note: super_global global_variable ko use kar shak ta hai

$a = 10;                    //global_variable
$b = 20;
function display()
{                       //super_gobal variable capital mai hota hai, syntex: $GLOBALS [' ']
    echo $GLOBALS ['a'] . "<br />";    //super_gobal
    echo $GLOBALS ['b'] . "<br />";
}
display()

// Output
// 10
// 20

?>