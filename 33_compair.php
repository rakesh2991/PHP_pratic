 <?php
    // topic   <,>,<=,>=,   same condation
    // <=>


// >	Greater than	$x > $y	Returns true if $x is greater than $y
                    //////different value and same data type"
// $x = 200;
// $y = 100;
// echo $x > $y;      echo "<br>"; //value TRUE is returen is "1"    //greter then
// var_dump ($x>$y);               //bool(true)

//  echo "<br \>";
//                     //////same value and same data type"
// $a = 100;
// $b = 100;
// echo $a > $b;       echo "<br>";    //value FALSE is returen is "BLANK"
// var_dump ($a>$b);                   //bool(false)



//                 // different data type  and different value
// $x = 100;
// $y = "200";
// echo $x > $y;                      // value FALSE is returen is "BLANK"
// var_dump ($x>$y);                 //bool(false)

//  echo "<br \>";
//                 // different data type  and same value
// $a = 100;
// $b = "100";                     //different data tpye
// echo $a > $b;                      //value FALSE is returen is "BLANK"
// var_dump ($a>$b);                 //bool(false)


// <=>	Spaceship	$x <=> $y	Returns an integer less than, equal to, or greater than zero, depending on if $x is less than, equal to, or greater than $y. Introduced in PHP 7. 

            // different data type  and same value      True 1
// $x = 200;
// $y = 100;
// echo $x <=> $y;         //1
// var_dump ($x<=>$y);     //int(1)

// echo "<br \>";
//             // same data type  and same value           equal = 0
// $a = 100;
// $b = 100;
// echo $a <=> $b;         //0   false
// var_dump ($a<=>$b);     //int(0)

// echo "<br \>";
//             // same data type  and different value      false = -1
// $a = 100;
// $b = 200;
// echo $a <=> $b;         //-1
// var_dump ($a<=>$b);     //int(-1)

// -----------------------------

// echo "<br \>";
// echo "<br \>";

// $r = "a";
// $s = "a";
// echo $r <=> $s;             //0
// var_dump ($r<=>$s);         //int(0)

// echo "<br \>";

// $f = "a";
// $g = "b";
// echo $f <=> $g;             //-1
// var_dump ($f<=>$g);         //int(-1) 

// echo "<br \>";

// $c = "b";                   
// $d = "a";
// echo $c <=> $d;              //1
// var_dump ($c<=>$d);          //int(-1)


// semple progrm

$a=100;
$b=100;
//o ko nhi le rha hai
if($a<=>$b)
{
    
    if($b<=>$a)
    {
        echo " dispay ";
    }

    if($b<=>$a)
    {
        echo "dispaly ";
    }
     
}
else
{
    echo "value equal hai";      // bye defult ho gya hai
}




 ?>