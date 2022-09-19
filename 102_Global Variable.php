<?php
//globa function ke under use nhi hota
// function display(){
//     $a=30;      // local variable
//     echo "accending value inside function = $a" . "<br />";
// }
// display();
// echo "accending value outside function = $a";           //this not print erroe


//------------- global keyword-both data print-----------
$a = 10;                    //global variable
function display(){
    global $a;      // local variable local variable ko use krne ke kiya "global" keyword ka use hota hai
    echo "accending value inside function = $a" . "<br />";
}
display();
echo "accending value outside function = $a";
?>