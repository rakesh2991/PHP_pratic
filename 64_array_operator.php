<?php
//----------------01 first -------------------
/*
$a = array("a"=>10, "b"=>20, "c"=>30, "d"=>40);
$b = array("a"=>"php", "b"=>"java", "c"=>"python", "d"=>"c++", "e"=>"c++");
$result = $b +$a;
print_r ($result)
*/

//------------02 second method-----------------
/*   //---$a and &x value are name
$a = array("a"=>10, "b"=>20, "c"=>30, "d"=>40);
$x = array("a"=>10, "b"=>20, "c"=>30, "d"=>40);   //same value 
*/
 
/* //---------$a and &x order change
$a = array("a"=>10, "b"=>20, "c"=>30, "d"=>40);
$x = array("b"=>20, "a"=>10,  "d"=>40,  "c"=>30);   //same value but place change
*/

/* //---------$a and &x vaule cahnge
$a = array("a"=>10, "b"=>20, "c"=>30, "d"=>40);
$x = array("a"=>"php", "b"=>"java", "c"=>"python", "d"=>"c++");   //value change
*/

if ($a == $x){    // change exprisition ($a === $x), ($a != $x), ($a <> $x), ($a !== $x)    
    echo "both array Key/Value pair true";
}
else
{
    echo "Key/Value pair false";
}




?>