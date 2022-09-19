<?php
// the array key function return an arrar conting the key.
// key ko dekhane ke liya array kery function ka use kar te hai ex: array_key() function

// $key    a   b   c   d
// value   10  20  30  40

// case 1 direct key ko dekha shak te hai
// $fee = array("a"=>10, "b"=>20, "c"=>30, "d"=>40);
// $key = array_keys($fee);         //key define kiya, array ke name ko import kiya
// echo $key[0];                    //insert value


// case 2 for loop statement
// $fee = array("a"=>10, "b"=>20, "c"=>30, "d"=>40);
// $key = array_keys($fee);
// for($i=0; $i<=3; $i++){
//     echo $key[$i], "<br />";
// }


//case 3 valuese data ko print karne ke liya
// $fee = array("a"=>10, "b"=>20, "c"=>30, "d"=>40);
// $key = array_keys($fee, 10);
// echo $key[0] . "<br />";

// case 4 valuese data ko print karne ke liya
// $fee = array("a"=>10, "b"=>20, "c"=>30, "d"=>40);
// $key = array_keys($fee, 10);
// echo $key[0] . "<br />";
?>