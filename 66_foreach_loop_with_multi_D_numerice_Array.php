<?php
           // values
$laptop[0][]="rk";      //[] auto fill
$laptop[0][]="dell";
$laptop[0][]=10;

$laptop[1][]="rs";      //[] auto fill
$laptop[1][]="Hp";
$laptop[1][]=20;

$laptop[2][]="sr";      //[] auto fill
$laptop[2][]="Zed";
$laptop[2][]=30;

           //arraw "data" view            
// foreach($laptop as $values)  //array_name ko value mai select karega       //this line use a data row select,  ex: rk dell 10
// {
//  foreach($values as $detials)  //array "name" ka jo value hai, us se "detials" ko select kare ga     //this line use to show a data value , one by one select value
//  {
//         echo $detials . " ";
//  }
//  echo "<br>";
// }

// output
// rk dell 10
// rs Hp 20
// sr Zed 30

                     
       //arraw "data" view in use" key"  use a keyword $key (arry ke data ke key ko show karta hai)
foreach($laptop as $keys => $values)         //this line use a data row select,  ex: rk dell 10
{
 foreach($values as $key => $detials)       //this line use to show a data value , one by one select value
 {
        echo $keys . " " . $key . " " . $detials . " "; //keys, key note
 }
 echo "<br>";
}

// output
// 0 0 rk 0 1 dell 0 2  10
// 1 0 rs 1 1 Hp   1 2  20
// 2 0 sr 2 1 Zed  2 2  30

// note: array_key() function use nhi hoga foreach() mai.

?>