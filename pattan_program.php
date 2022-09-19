<?php
// echo "*";    // one print program
// echo "*****";      // multipale line print

// use a for loop method
/*
for($j=1; $j<=5; $j++){
    echo "*";
}
echo "<br />";
*/

// for($i=0; $i<=2; $i++){             //i=row create
//     for($j=0; $j<=4; $j++){         //j=coloum create and print star
//         echo "*";
//     }
// echo "<br />";
// }
/*
i=0 //create row then   j=0 0<=4 true print *
                         1<=4 true print **
                         2<=4 true print ***
                         3<=4 true print ****
                         4<=4 true print *****   stop next

                         
i=1 //create row then   j=0 0<=4 true print *
                         1<=4 true print **
                         2<=4 true print ***
                         3<=4 true print ****
                         4<=4 true print *****   stop next

output:
*****
*****

*/

/*
*
**
***
****
*****
*/

/*
for($i=1; $i<=5; $i++){
    for($j=1; $j<=5; $j++){
        if($j<=$i){
            echo "*";
        }
        else
        {
            echo " ";
        }
    }    
    echo "<br/>";
}
*/

// advancve
/*
for($i=1; $i<=5; $i++){
    for($j=1; $j<=$i; $j++){
        echo "* ";
    }    
    echo "<br/>";
}
*/


// second pattten program
//     *
//    **
//   ***
//  ****
// *****

function pypart2($n)
{
    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $n; $j++) {
            if($j<=($n-$i)){
                echo " "." ";
                  
            }else {
                echo "* ";
            }
              
        }
        echo "<br />";
    } 
}
  
    // Driver Code
    $n = 5;
    pypart2($n);


?>