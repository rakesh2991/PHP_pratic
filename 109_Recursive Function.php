<?php
// recursation apne app ko call karne ke liya

function recur($a)
{
    if($a<=10){
       echo "$a <br/>";
       recur($a+1);    //function calling it self //increment ke jaga recur use hu aa hai
     }
}

recur(1)        //start position no      calling function
//  //or
// recur(5) 


// output_add_rewrite_var
// 1
// 2
// 3
// 4
// 5
// 6
// 7
// 8
// 9
// 10
?>