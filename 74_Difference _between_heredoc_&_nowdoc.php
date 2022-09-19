<?php

$number = 456;
        //---------------Here Doc  data pass karta hai--------------
//         echo <<< MYDATA
// well come to rakesh Here Doc
// it is very "important" data $number
// MYDATA;


    $data= <<< MYDATA
well come to rakesh HereDoc
it is very "important" data $number
MYDATA;

echo $data;


// output: well come to rakesh Here Doc it is very "important" data 456
 echo "<br />";




 //------------NOw Doc------------------------- //data pass nhi karta hai  //use a double qouted
//         echo <<< 'MYDATA'
// well come to rakesh NOw Doc
// it is very "important" data $number
// MYDATA;


    $datas= <<< 'MYDATA'
well come to rakesh NOw Doc
it is very "important" data $number
MYDATA;
echo $datas;

// output: well come to rakesh NOw Doc it is very "important" data $number
// number print nhi hu aa

?>