<?php
function one()
{
    echo " i am one <br>";
}

function two()
{
    echo " i am two <br>";
}

// function ke name ko "varible" bana ke liya "$f_variable" 
// ka use hota hai or call karene ke liya $f_variable();
$f_variable = "one";
$f_variable();

$s_variable = "two";
$s_variable();


// output
// i am one
// i am two
?>