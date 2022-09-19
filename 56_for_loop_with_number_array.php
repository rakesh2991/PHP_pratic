<?php
// $name[0]="a";     //1                  
// $name[1]="b";     //2   
// $name[2]="c";     //3 
// $name[3]="d";     //4

/*
1. array ke INDEX data ko "$i" mai add kiya or "0" se start kiya
2. condition use kiya $i<=3
3. data ko count karaya  $i++

*/
// -------old method
// for($i=0; $i<=3; $i++){     
    // echo $name[$i], "<br/>";  //4. array ke name $name data ke liya "$i" use kiya
// }

// output
// // a
// // b
// // c
// // f

// ---- use in a count() function
// for($i=0; $i<count($name); $i++){
//     echo $name[$i], "<br/>";
// }

// output
// a
// b
// c
// f

// second method  ----new---
$name=array("a","b","c","f");
for($i=0; $i<count($name); $i++){      
 //array ko cout karne ka kam "count()"kar rha hai, 
    echo $name[$i], "<br/>";
}

// output
// a
// b
// c
// f


?>