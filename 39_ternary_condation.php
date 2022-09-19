<!-- it is work similar as if else statement -->
<?php
// syntex
// variabe = condation ? expression1:expression2;
//                          true       false

/*
if(5>1)
{
    echo "greater";
}
else
{
    echo "less";
}
*/

// use in trenary  short hand code
                // T           F
$result = (5<1)?"greater" : "less";
echo $result;
?>