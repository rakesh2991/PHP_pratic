<?php
// anonymous function varible mai function ko create karte hai

// function disp(){
//     return function(){          //return a function
//         return "rakesh";
//     };
// }
// $a = disp();          
// echo $a();

// output
// rakesh

// one parametr pass argument
// function disp($str){                //3. parameter pass ($str)
//     //      rakesh        hello
//     return function() use ($str){    // is mai "use ($str)" "argument "ke data ko call kare ga, $str -> $a = disp("hello")
//         return "$str rakesh";            //'function()' ye 'echo $a();' call kare ga, abhi "rakesh" direct hai
//     };
// }      // use ($str)
// $a = disp("hello");  //argument  //2. disp("rakesh") under mai data ko add kiya gaya hai, means by default data hau
// echo $a();                      //1.call kar rha hai $a -> disp($str)

// // output 
// // hello rakesh



// two parametr pass argument
function disp($str){                //parameter pass ($str)
                // rakesh        hello 
    return function($a_str) use ($str){     //parameter ko creete kiya pass karane ke liya
        return "$str $a_str";
    };
}       //use ($str)
$a = disp("hello");     

    // function($a_str)
echo $a("rakesh");    

// // output 
// // hello rakesh
?>