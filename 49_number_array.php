<?php
/*
//both of side
//first method              second methon ()auto value declear
$name[0]="a";               $name[]="a";               
$name[1]="b";               $name[]="b"; 
$name[2]="c";               $name[]="c"; 
$name[3]="d";               $name[]="d"; 

*/

// // 1. variable key value call array                    semple          method
// $name[0] = 25;              //$name = 25;
// echo $name[0]               //echo $name              

// // 2. without key/index value call   $name[0]                  
// $name[] = 20;              
// echo $name[0]   
 
// // 3.  call a key[0]  concept                   
// $name[] = 20;              
// echo "value is: $name[0]"; 

// 4.  fulll string concept                   
// $name[] = 20;              
// echo "value is: $name[0]"; 

//5. short string with constent (.)
$name[] = 20;              
echo "value is:" . $name[0];    //in usea dought

// 6.koma (,)
$name[] = 20;              
echo "value is:" , $name[0];    //in usea koma

?>