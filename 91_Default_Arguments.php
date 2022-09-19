<?php
/*
// syntex
// 1.
function function_name(parameter_1, parameter_2, parameter_3 = "value"){
    block of statement;
}

// 2.   wrong process
function function_name(parameter_1, parameter_2 = "value", parameter_3 = "value"){
    block of statement;
}

// 2.   wrong process
function function_name(parameter_1, parameter_2 = "value_1", parameter_3 = "value_2"){
    block of statement;
}

//example  //parameter ke properties ko accesk karne ke liya
function diaplay($name1, $name2)
{
    echo "$name1 to $name2"         //use a paramenter properties
}
*/

//////////////////////----------------------------------///////////////////////////////
// // first: by defut data set  "$age= 21 -> "game""
// function display($name, $surnamne, $age= 21)
// {
//     echo "my name is $name $surnamne my age is $age <br>";   
// }
// display("rakesh", "sharma");  //age ko declear nhi krne per, auto matic age ko call kare ga
// display("rakesh", "sharma", "game");   // defult argument is set by defult game first priority



// secound: parameter ke data ko decler liya "$age->23"
// function display($name, $surnamne= "sahu", $age)
// {
//     echo "my name is $name $surnamne my age is $age <br>";   
// }
// display("rakesh", "sharma", 23);  //sahu ke jaga sharma ko select kare


// third : automatioc data call kare ga "$age= 21 -> display("-", "-" autocall)"
// function display($name, $surnamne, $age= 21)
// {
//     echo "my name is $name $surnamne my age is $age <br>";   
// }
// display("rakesh", "sharma");  //age ko declear nhi krne per, automatic age ko call kare ga





// // third (NULL)
// function display($name, $phone, $address = NULL)
// {
//     if($address==NUll){
//         echo "sorry data not found";
//     }
//     else
//     {
//         echo "$name your number $phone";
//     }
// }
// // null ke data ko set kiya hai
// display("raj","1235","india");       //1. output: raj your number 1235

// // null ke data ko set nhi kiya hai
// display("raj","1235");                  //2. output: sorry data not found



// use in arry in funcation
// function display($name=array("rajesh"))
// {
    
// }

?>