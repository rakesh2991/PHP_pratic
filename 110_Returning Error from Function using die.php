<?php
// echo "first line <br />";
// function disp($a)
// {
//     if($a<=10){
//         echo "$a <br />";
//         return TRUE;
//     }
//     else
//         return False;
// }
// T                    F                       //first
// disp(23) or die("error: enter valid number");    // or:operatre hai
// echo ("rest of the code");
// ----output----
// first line
// reeor: enter valid number

// disp(5) or die("error: enter valid number");        //second  // or:operatre hai
// echo ("rest of the code");
// // ----output----
// first line
// 5
// rest of the code



//------------------method dia consept-------------
echo "first line <br />";
function disp($a)
{
    if($a<=10)
    {
        echo "$a <br />";
        return TRUE;                 
    }
    else
    {
        echo "error: enter valid number <br />";
        return FALSE;
    }
}
disp(5);
echo ("rest of the code");

// output
// first line
// 5
// rest of the code
?>