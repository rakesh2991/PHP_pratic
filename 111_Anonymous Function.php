<?php
// note: anonymous function mai "use" keyword ka use hota hai
//anonymous function ko "varibale" mai create karte hai

    // ------------normal funcation call (recall)--------------

// heelo program
// $a = function(){
//     echo "Hello anonymous function";
// };
// $a();           //calling a function

//parameter us a functon call

// $a = function($p){                  //parameter declear 
//     echo "anonymous function $p";
// };
// $a(12);                             //argument per value ko dala gaya

// anonymous function ko "varibale" mai create karte hai or "use" keyword ka use karte hai


// variable scop in anonyonus function

// $r=10;                                    //global variable
// $a = function() use ($r){                  //parameter declear
//     echo "anonymous function $r";
// };
// $a();          



// $y= 34;
// $r=10;                                       //global variable
// $a = function($p) use ($r){             //$y=34 =$y=$p=34        //parameter declear
//     echo "anonymous function $p";        // call a $p
// };
// $a($y);

// // output
// // 34

$y= 34;
$r=10;                                       //global variable
$a = function($p) use ($r){             //$y=34 =$y=$p=34        //parameter declear
    echo "anonymous function $r";   //call a (use) $r = 10
};
$a($y);

// output
// 34
?>