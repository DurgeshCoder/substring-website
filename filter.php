<?php
 


 $numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

 // Using array_filter()
 $filteredNumbers = array_filter($numbers, function($num) {
     return $num % 2 != 0; // Keep odd numbers
    
 });

 
 // Using loop
 $filteredNumbers = [];
 foreach ($numbers as $num) {
     if ($num % 2 != 0) {
         $filteredNumbers[] = $num; // Keep odd numbers
     }
     echo $num;
   
 }
?>


