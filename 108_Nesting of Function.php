<?php
/*
function outer_function()
{
    block of statement;
    function inner_function()
    {
        block of statement;
    }
}
*/

function outer_display()            //outer function
{
    echo "i am outer functon <br />";
    function inner_display()    //inner function
    {
        echo "i ma inner function <br />";
    }
}

outer_display();
inner_display();

// outerput
// i am outer functon
// i ma inner function



?>