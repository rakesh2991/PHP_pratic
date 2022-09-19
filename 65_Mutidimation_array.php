<?php
//numerical array               //only key
/*
$fee = array("a", "b", "c");
or
$fee = array(
            "a",
            "b",
            "c"
)


*/
//Associtive array              //key with values
/*
$fee = array("a" => 10, "b"=> 20, "c" => 30)
or
$fee = array(
        "a" => 10, 
        "b"=> 20, 
        "c" => 30
        )
*/

// 2D array
//       0       1       2
//0     rk      dell    10
//1     rs      Hp      20
//2     sr      Zed     30   

// mapping array//
// [0][0]rk     [0][1]dell      [0][2]10
// [1][0]rs     [1][1]Hp        [1][2]20
// [2][0]sr     [2][1]Zed       [2][2]30
//////////////////-------------------------------------------/////////////////////

// program //Multi D numerical array  (short cut)   new method
        //         0     1     2               row
// $laptop = array(
//         array("rk", "dell", 10),           //0
//         array("rs", "Hp", 20),             //1
//         array("sr", "Zed", 30)             //2
// );

//-----------------------------------------------------//
                        // long method  old method

// $laptop[0][]="rk";      //[] auto fill
// $laptop[0][]="dell";
// $laptop[0][]=10;

// $laptop[1][]="rs";      //[] auto fill
// $laptop[1][]="Hp";
// $laptop[1][]=20;

// $laptop[2][]="sr";      //[] auto fill
// $laptop[2][]="Zed";
// $laptop[2][]=30;

// echo $laptop[0][2];     //only access data      output 10


//                      //Associtive array
// program //Multi D Associtive array  (short cut)
        //       0       1      2               row
// $fee = array(
//         "rk" => array("php"=>10, "java"=>20, "css"=>30),            //0
//         "rs" => array("python"=>10, "django"=>20, "xml"=>30),,             //1
//         "sr" => array("c++"=>10, "ruby"=>20, "html"=>30),            //2
// );

//------------------------------------------------------------//
                // long method
                
// $fee["rk"]["php"]=10;      //[] auto fill
// $fee["rk"]["java"]=20;
// $fee["rk"]["css"]=30;

// $fee["rs"]["pyhton"]=10;      //[] auto fill
// $fee["rs"]["django"]=20;
// $fee["rs"]["xml"]=30;

// $fee["sr"]["c++"]=10;     //[] auto fill
// $fee["sr"]["ruby"]=20;
// $fee["sr"]["thml"]=30;

// echo $fee["rs"]["django"];     //only access data value ko dekhane ke liya
// output 20
?>