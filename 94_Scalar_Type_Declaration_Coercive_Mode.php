<?php
function add(int $a, int $b)
{
    return ($a+$b);
}
echo add(6, 4);         // 10
echo add(6.6, 4.2);     // 10   because this value interger type
echo add(6, "4"); 
echo add(6, "4.6");
echo add(6, "rakesh");  //error
echo add(6, "2.54");  //erroe




// function add(string $a, string $b)
// {
//     return ($a.$b);     //use in dought
// }
// echo add(6, "rakesh"); 
// echo add(6, "4.6");


// data type ko dekhane ke liya  gettype()
$a="45";
echo gettype($a);           //integer

$a="rakesh";
echo gettype($a);           //string

?>