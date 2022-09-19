<?php
//               topic  
####################################################################################################S
#   !=      not equal               "true" hone per "1" return kare ga
#   <>      condation true fales chack kareta hai Value a and value b (same and Different data type)
#   !==     not identical (datatype per kam kareta hai)  datatype per kam karta hai value 1 and value 2 per
#####################################################################################################


// !=	Not equal	$x != $y	Returns true if $x is not equal to $y (value babar nhi hona chaheye)


//                  case 1  // same data type and value
// $x = 100;
// $y = 200;
// echo $x != $y;  echo "<br>";            //value TRUE is returen is "1"
// var_dump ($x!=$y);                      //bool(true)

//  echo "<br \>";

// $a = 100;
// $b = 100;
// echo $a != $b;       echo "<br>";       //value FALSE is returen is "BLANK"
// var_dump ($a!=$b);                      //bool(false)



//                  case 2  // different data type and same/different value
// $x = 100;       //interger
// $y = "200";     //string
// echo $x != $y;           echo "<br>";  //value TRUE is returen is "1"
// var_dump ($x!=$y);                      //bool(true)

// echo "<br \>";
                        // different datatype and "equal value and different data type"
// $a = 100;           //interger
// $b = "100";         //string
// echo $a != $b;           echo "<br>";       //value FALSE is returen is "BLANK"
// var_dump ($a!=$b);                         //bool(false)


// <>	Not equal	$x <> $y	Returns true if $x is not equal to $y

                ////different value and  same data type"
// $x = 100;
// $y = 200;
// echo $x <> $y;      echo "<br>";        //value TRUE is returen is "1"
// var_dump ($x<>$y);                      //bool(true)

//  echo "<br \>";
                    ////equal value and same data type"
// $a = 100;
// $b = 100;
// echo $a <> $b;      echo "<br>";        //value FALSE is returen is "BLANK"
// var_dump ($a<>$b);                      //bool(false)



                   // // different data type and different value
// $x = 100;
// $y = "200";
// echo $x <> $y;              echo "<br>";        //value TRUE is returen is "1"       
// var_dump ($x<>$y);                              //bool(true)

//  echo "<br \>";

// $a = 100;
// $b = "100";
// echo $a <> $b;              echo "<br>";        //value FALSE is returen is "BLANK"
// var_dump ($a<>$b);                              //bool(false)


// !==	Not identical	$x !== $y	Returns true if $x is not equal to $y, or they are not of the same type

                //////different value and same data type"
// $x = 100;
// $y = 200;
// echo $x !== $y;         echo "<br>";    //value TRUE is returen is "1"
// var_dump ($x!==$y);                     //bool(true)

//  echo "<br \>";
//                 //////same value and same data type"
// $a = 100;
// $b = 100;
// echo $a !== $b;         echo "<br>";      //value FALSE is returen is "BLANK"
// var_dump ($a!==$b);                       //bool(false)


                //////different value and different data type" 
// $x = 100;
// $y = "200";
// echo $x !== $y;        echo "<br>";     //value TRUE is returen is "1"
// var_dump ($x!==$y);                     //bool(true)

//  echo "<br \>";
//                         //////same value and different data type" 
// $a = 100;
// $b = "100";                    
// echo $a !== $b;       echo "<br>";  ////value TRUE is returen is "1"  , value equal hai but different data type hai
// var_dump ($a!==$b);                 //bool(true)



?>