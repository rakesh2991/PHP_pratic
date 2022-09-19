<?php
/* synyex
define("contant_varable", value, case in sensitive);
define("contant_varable", value, case in sensitive);
        pi                3.15      true/false
*/

/*
Constants are much like variables, except for the following differences:

A constant's value cannot be changed after it is set
Constant names do not need a leading dollar sign ($)
Constants can be accessed regardless of scope
Constant values can only be strings and numbers

program

define("GREETING","Hello you! How are you today?");
//echo constant("GREETING");
echo GREETING

------
*/

define("pi", 3.15);
echo pi;
?>