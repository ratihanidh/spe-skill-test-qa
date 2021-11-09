<?php 

function isPerfectSquare($x) 
{ 
    $s = (int)(sqrt($x)); 
    return ($s * $s == $x); 
} 
  
function isFibonacci($n) 
{ 
    return isPerfectSquare(5 * $n * $n + 4) ||  
           isPerfectSquare(5 * $n * $n - 4); 
} 
  
//for ($i = 1; $i <= 10; $i++) 
$i = 4;
if(isFibonacci($i)) 
echo "Fibonacci $i // outputnya adalah <b>true</b>
</br>"; 
else
echo "Fibonacci $i // outputnya adalah <b>false</b>
</br>" ; 
  
?> 