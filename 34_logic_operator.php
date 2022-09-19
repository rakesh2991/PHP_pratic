<?php
// use a method of two condation
// and operater    &&/AND
//  T   T   T
//  T   F   F
//  F   T   F
//  F   F   F

                       //       > greter  < lessthen
// if((5<2) && (5>3))
// //  F         T      F      
// {
//     echo "this is true";
// }
// else
// {
//     echo "this is false";  //False ko print kiya 
// }
// // ----------------------------
// if((5>2) && (5>3))
// //  T         T      T      
// {
//     echo "this is true";            //T
// }
// else
// {
//     echo "this is false";
// }
// ----------------------------
// if((5>2) && (5<3))
// //  T         F      F      
// {
//     echo "this is true";            
// }
// else
// {
//     echo "this is false";           //F
// }

// OR operater    OR ||

//  T   T   F
//  T   F   T
//  F   T   T
//  F   F   F


// if((5<2) || (5>3))
// //  F         T      T      
// {
//     echo "this is true";    //T
// }
// else
// {
//     echo "this is false";  
// }
// // ----------------------------
// if((5>2) || (5>3))
// //  T         T      F      
// {
//     echo "this is False";            //F
// }
// else
// {
//     echo "this is TRUE";
// }
// ----------------------------
// if((5>2) || (5<3))
// //  T         F      T      
// {
//     echo "this is true";            //T
// }
// else
// {
//     echo "this is false";           
// }

?>