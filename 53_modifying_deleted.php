<?php
// $name[0]="Rak";
// $name[1]="Raj";
// $name[2]="Sonu";

// //data del kare ga
// echo $name[1] = "";
// echo $name[1] . "<br>";    // note: data del nhi h aa hai, value 1 pass ho rha hai, display error show nhi kar rha hai

// output
// black page show ho rha hai

// ---------- unset()-------------
$name[0]="Rak";
$name[1]="Raj";
$name[2]="Sonu";

//data del kare ga deleted unset()
unset($name[1]);
echo $name[1] . "<br>"; 

// output                              del data hogya hai
// Notice: Undefined offset: 1



?> 