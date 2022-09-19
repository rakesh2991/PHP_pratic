<?php

//  old
$fee = array("a"=>10, "b"=>20, "c"=>30, "d"=>40);
$key = array_keys($fee);
// multipal dekhane ke liya
for($i=0; $i<count($key); $i++){
    echo $key[$i] . "&nbsp" . $fee[$key[$i]] . "<br />";
}

// output
// a 10
// b 20
// c 30
// d 40

?>