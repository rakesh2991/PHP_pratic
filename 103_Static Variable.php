<?php

// function display()
// {
//     static $a = 0; // static keyword value multipal value ko increment karta hai
//     $a++;           
//     return $a;
// }

// echo "calling static variable function <br />";
// //mutipal data display
// echo display() . "<br/>";
// echo display() . "<br/>";
// echo display() . "<br/>";
// echo display() . "<br/>";

//-----------output---------
// calling static variable function
// 1
// 2
// 3
// 4


// program 3 static and non static

function display()
{
    static $a = 0; // static keyword value multipal value ko increment karta hai
    $a++;           
    return $a;
}

echo "calling static variable function <br />";
//mutipal data display
echo display() . "<br/>";
echo display() . "<br/>";
echo display() . "<br/>";
echo display() . "<br/>";

function displays()
{
    $a = 0; // non static keyword value multipal value ko increment nhi karta hai
    $a++;           
    return $a;
}

echo "calling non static variable function <br />";
//mutipal data display
echo displays() . "<br/>";
echo displays() . "<br/>";
echo displays() . "<br/>";
echo displays() . "<br/>";

// Output
// calling static variable function
// 1
// 2
// 3
// 4
// calling non static variable function
// 1
// 1
// 1
// 1

?>