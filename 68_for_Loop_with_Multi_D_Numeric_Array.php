<?php
//ye single data dekha rha hai
$laptop[0][]="rk";      //[] auto fill
$laptop[0][]="dell";
$laptop[0][]=10;

$laptop[1][]="rs";      //[] auto fill
$laptop[1][]="Hp";
$laptop[1][]=20;

$laptop[2][]="sr";      //[] auto fill
$laptop[2][]="Zed";
$laptop[2][]=30;;
    //old
for($i=0; $i<count($laptop); $i++)      //use a count() function
{
    for($j=0; $j<count($laptop[$i]); $j++)
    {
        echo $laptop[$i][$j] . " ";
    }
    echo "<br>";
}

//ye single data dekha rha hai
// output
// rk dell 10
// rs Hp 20
// sr Zed 30
?>