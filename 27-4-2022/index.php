<?php

/* Q1 */

echo "<h1>task one</h1>";

function IsPrime($num)
{
    if($num ==1)
        {
            return "$num is not a prime number ";
        }
 for($i=2; $i<$num; $i++)
   {
        if($num %$i ==0)
        {
            return "$num is not a prime number ";
        }
    }
        return "$num is a prime number ";
   }
echo IsPrime(4);




/* Q2 */
echo "<h1>task two</h1>";

function reverse($str){

    return strrev($str); 
}

echo reverse("amal");


/* Q3 */
echo "<h1>task three</h1>";



function ToLowerCase($lower){
 

    if(ctype_lower($lower)){

        echo "you string is ok";
    }
    else{
        echo "you string is not ok";
    }

    }
    $lower="reMove";
    ToLowerCase($lower);



    /* Q4 */
echo "<h1>task Four</h1>";



function swap($x,$y){

    $temp=$x;
    $x=$y;
    $y=$temp;
    echo "x = $x and y= $y";

}

$x=10;
$y=5;

swap($x,$y);



    /* Q5 */
    echo "<h1>task five</h1>";



    function Armstrong($arm){
    
       if(pow((int)$arm[0],3) + pow((int)$arm[1],3) + pow((int)$arm[2],3) == $arm){

        echo "$arm is an armstong number";
       
       }else {

        echo "$arm is not armstong number";

       }
       
    
    }
    
    $arm='371';
     Armstrong($arm);
    


/* Q6 */
echo "<h1>task six</h1>";


function palindrom($pali) 
{
  if ($pali == strrev($pali))
     echo "yes";
  else
	 echo "no";
}
$pali="Eva, can I see bees in a cave?";
palindrom($pali);


/* Q7*/
echo "<h1>task seven</h1>";


echo "Remove duplicates ! <br><br>";
$array = array(2, 4, 7, 4, 8, 4);
$newArray = array_unique($array);
echo '<pre>';
print_r($array);
echo '<pre>';
print_r($newArray);

?>








