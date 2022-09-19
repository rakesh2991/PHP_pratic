<?php
/*
swith(expression){
    case expression 1;
    statement;
    break;
    case expression 2;
    break;
    case expression 3;
    statement;
    break;
    case expression 4;
    statement;
    break;


    defult:
     defult block of instance 
}
*/

// progrm
$data = 05;
switch($data){                      // $data or $data = 10
    case 01:
        echo "php 1.1";
        break;
    case 05:
        echo "php 5.5<br \>";
        echo "old version";
        break;
    case 10:
        echo "php 7.9<br \>";
        echo "Latest version";
        break;
default:
        echo "no exam";
    
}     

?>