<?php

// -----copy array----------- (same array ke data ko new variable mai da rha hai)
$name[0]="a";
$name[1]="b";
$name[2]="c";
$name[3]="d"; 
$student = $name;   //$name ke data ko student mai coply kar kar rha hai,
// ex: student=$name= [index position]

echo "'\$name' ke [2] data ko '\$student' mai dala gaya hai: " . $student[2];

echo '<br>';
// replace
echo "data ko replace bhi kar shak te hai: " . $student[2]="comp"; 
?>