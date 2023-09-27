<?php
 $a = 0;
 $b = 1;
 
 for ($i = 1; $i <= 10; $i++) {
     $next = $a + $b;
     
     if ($next > 100) {
         break;
     }
 
     echo $next . ' ';
     
     $a = $b;
     $b = $next;
 }
 
?>

