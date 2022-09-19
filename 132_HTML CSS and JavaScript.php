<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

// ---------------html-display------------
// echo "<h1> hello phph</h1>";

// echo "<input type='text' value='rakesh'>";

// $a = "rakesh";
// echo "<input type='text' value=$a />";


//---------------java scrip inside---------------
// echo "<script> alert('rakesh'); </script>";
?>


<!-- // -----------------php inside html----------------- -->
<!-- <P> <?php
        // echo "hello php" 
    ?> 
</P> -->

<!-- 2 method -->

<?php $a = "rakesh"; ?>
<P> <?php
        echo "$a";
    ?> 
        <!-- this methon in use -->
        <input type='text' value=<?php echo "$a"; ?> />
     
</P>

<!-- ------------input methon-------------- -->

<input type='text' value=<?php echo "enter_name"; ?> />
</body>
</html>

