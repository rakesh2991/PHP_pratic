<?php

/* nested if statement   syntex
if(condation)     //True/False is call inner block
{
    // if condation is "TRUE" that is call inner block of statement,
    block of statement;       
    
    if(conation)        True/False
    {
        statement;
    }

     if(conation)       True
    {
        statement;
    }
}

if(condation)           T/f
{
    statement;          
}

echo " rest de of code";
*/
// ----------------------------------------------

if(1>2)            //T/F
{
    echo "true1";   //jb condition true ho tho next statement ko print kar dena
    
    if(3<4)             //T/F
    {
        echo "true1.1";
    }

    if(5<6)
    {
        echo "true1.2";
    }
}

if(3<4)
{
    echo "true2";
}

//thora advance karete hai

// $a=1;
// $b=2;
// $c=3;
// $d=4;
// $e=5;
// $f=6;
// $g=7;
// $h=8;

// if($a>$b)
// {
//     echo "true1";

//     if($c<$d)
//     {
//         echo "true1.1";
//     }

//     if($e<$f)
//     {
//         echo "true1.2";
//     }
// }

// if($g>$h)
// {
//     echo "true2";
// }

// echo "try again "
