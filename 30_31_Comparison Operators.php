<?php
// topic          
####################################################################################################S
#   =       assign value
#   ==      condation true fales chack kareta hai Value a and vale b (same and Different data type)
#   ===      identical (datatype per kam kareta hai)   data ko compair karata hai value 1 and value 2 per 
#####################################################################################################
// ==	Equal	$x == $y    both value is equal(same data type) hona cha heye dono formate
// $a = 10;
// $b = 10;
// echo $a==$b;    echo "<br \>"; // "true" hone per return "1" kare ga 
// var_dump ($a==$b);              //bool(true)

// echo "<br \>";
                    // "different data" type $x and $y
// $x = 10;           // integer
// $y = "10";       //convert string
// echo $x==$y;                 // "true" hone per return "1" kare ga 
// var_dump ($x==$y);           //bool(true)



// ===	Identical	$x === $y    Returns true if $x is equal to $y, and they are of the "same type"(same data type)
// $a = 10;
// $b = 10;
// echo $a===$b; echo "<br \>";        // "true" hone per return "1" kare ga 
// var_dump ($a===$b);                  //bool(true)

// echo "<br \>";
//                         //both value are not equal and same data type
// $x = 10;           // integer
// $y = "10";       //convert string
// echo $x===$y;    echo "<br \>";          // "false" hone per return "blank" kare ga
// var_dump ($x===$y);                      // bool(false)


// ------------------------assign value
// $x = 10;           // integer
// $y = "20";       //convert string
// echo $x ;           echo "<br \>"; 
// var_dump ( $x );

// echo "<br \>";
// echo "--------------<br>";

// echo $y;            echo "<br \>"; 
// var_dump ($y);     

 //string(2) "20" -> 2 character show karta hai
//string(3) "20 " -> "2" character show karta hai and "1" blanck splace  bhi count kare ga

// ------------------------ use a if condation chack a value == 
// // case 1 same data type
// $num1 = 10;
// $num2 = 10;
// if($num1==$num2)
// {
//     echo "both  data type same \$num1 and \$num2";   //ddouer prinr "\"
// }
// else
// {
//     echo "both  data type are note same \$num1 and \$num2";   //ddouer prinr "\"
// }
// output
// both data type same $num1 and $num2
// case 2 different data type


// $num1 = 10;
// $num2 = "10";
// if($num1==$num2)
// {
//     echo "both  data type same \$num1 and \$num2";   //ddouer prinr "\"
// }
// else
// {
//     echo "both  data type are note same \$num1 and \$num2";   //ddouer prinr "\"
// }

// // output
// // both data type same $num1 and $num2

// ------------------------ use a if condation chack a value === 
// // case 1 same data type
// $num1 = 10;
// $num2 = 10;
// if($num1===$num2)
// {
//     echo "both  data type same \$num1 and \$num2";   //ddouer prinr "\"
// }
// else
// {
//     echo "both  data type are note same \$num1 and \$num2";   //ddouer prinr "\"
// }
// output
// both data type same $num1 and $num2
// case 2 different data type


// $num1 = 10;
// $num2 = "10";
// if($num1===$num2)
// {
//     echo "both  data type same \$num1 and \$num2";   //ddouer prinr "\"
// }
// else
// {
//     echo "both  data type are note same \$num1 and \$num2";   //ddouer prinr "\"
// }

// output
// both data type are note same $num1 and $num2

?>
