<?php
function disp($a_fun)       //parameter create kiya hai
{
    return $a_fun();        //parameter ko function "$a_fun()" bana ke retuen call kiya
}

echo disp(
    function()              //disp ke under function create kiya hai, data return kara rha hai       
    {
        return "hellow";    //function ke under "hellow" bana hai
    }
);

// ---------------------------------
// line no 9 to 12 ko aase represent kiya hai
// $a_fun = function(){     ///this concept is varibale concept
//     return "rafkesh";
// }


?>