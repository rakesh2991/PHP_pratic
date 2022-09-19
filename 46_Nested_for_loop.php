<?php

// first statement
for($Char="a"; $Char <= "c"; $Char++){
    echo "Char in inner: $Char <br />";              //<------------- dialay msg in use inner use
    for($num=1; $num <= 3; $num++){
        echo "Char: $num <br />";
    }
}

echo "<br>";
echo "different loop and code <br>";
echo "<br>";

// second statement
for($Char="a"; $Char <= "c"; $Char++){
    
    for($num=1; $num <= 3; $num++){
        echo "NUM: $num <br />";
    }
    echo "Char in outer: $Char <br />";          //<-------------------- diapay in use outer use
}

?>