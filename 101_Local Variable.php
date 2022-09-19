<?php
$a = 125;                   //global variable
function display(){         //parameter varable cal nhi hu aa hai
    $a=30;      // local variable
    echo "accending value inside function = $a" . "<br />"; //$a is value 30
}
display();                                          //argument varable cal nhi hu aa hau
echo "accending value outside function = $a";       //$a = 125;  call hoga 

// output
// accending value inside function = 30
// accending value outside function = 125
?>