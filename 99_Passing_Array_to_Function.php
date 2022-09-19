<?php
// array ke value ko dekhane ke liya
// $mark=array(10,20,30,40);
// function total($subject)   //2. array ka table(function) name same use hoga "total" hai, 'parameter' arraay ke data list ko banane ka kam kare ga 
// {
//     echo $subject[0];      //"parameter" ke shat index position ke value show kare ga
// }
// echo total($mark);     //1. array name ke table ko pahe select kare gaye argument ke under "($mark)" , "tota" function ka name hai

//Output: 10



// total mumber of count
// $mark=array(10,20,30,40);

// function total($subject)       //2. array ka table(function) name same use hoga "total" hai, 'parameter' arraay ke data list ko banane ka kam kare ga  //subject parameter hai
// {
//     $sum = 0;                    // "0" se value ko start kare ga
//     foreach($subject as $num)   //array ka data parameter ke name se hai jo "subject hai
//     {
//         // echo $num . "<br/>";
//         $sum = $sum + $num;         /0+10+20+30+40=100//a=a+b
//     }
//     return $sum;                //pass a value or output
// }
// echo total($mark);              //1. array ($mask) ke table name function name (total) ko select karu ga "marks"
// //output 100

// -----------------same exapmle 2-------------
// $mark=array(10,20,30,40);

// function total($subject)       //2. array ka table(function) name same use hoga "total" hai, 'parameter' arraay ke data list ko banane ka kam kare ga  //subject parameter hai
// {
//     $sum = 2;                    // "0" se value ko start kare ga
//     foreach($subject as $num)   //array ka data parameter ke name se hai jo "subject hai
//     {
//         // echo $num . "<br/>";
//         $sum = $sum + $num;         //2+10+20+30+40= 102//a=a+b
                                 
//     }
//     return $sum;                //pass a value or output
// }
// echo total($mark);              //1. array ($mask) ke table name function name (total) ko select karu ga "marks"
//output 102


//----------------------- defult value---------------------
// $mark=array(10,20,30,40);
// function total($subject=array(10,20,20))   //defult value    
// {
//     $sum = 0;
//     foreach($subject as $num)
//     {
//         $sum = $sum + $num;
//     }
//     return $sum;                //pass a value
// }
// echo total($mark) . "<br>";          //output          100
// echo total();               //call a defult value      50

// ------------------------
// $mark=array(10,20,30,40);
// function total($subject=array(10,20,20))   //defult value    
// {
//     $sum = 3;
//     foreach($subject as $num)
//     {
//         $sum = $sum + $num;
//     }
//     return $sum;                //pass a value
// }
// echo total($mark) . "<br>";          //output          103
// echo total();               //call a defult value      53
?>