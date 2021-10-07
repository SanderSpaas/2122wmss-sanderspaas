<?php

/**
 * Exercise 1.5
 * @author Sander Spaas sander.spaas@student.odisee.be
 */

 $parameter = $argv[1];
 $parameter2 = $argv[2]; 
 /**if (isPalindrome($parameter)){
    echo $parameter . ' is a palindrome.';
 }
 else{
    echo $parameter . ' is not a palindrome.';
 }

print_r(factuur($parameter, $parameter2) . 'Euro');
*/
$my_year = $parameter;
year_check($my_year);

 function isPalindrome(string $string) : bool {
   return $string === strrev($string);
   /*of: if(strrev($string) === $string) {
       return true;
    }
    return false;
    */
 }

 //oefening 1.5b
function year_check($my_year)
{
if ($my_year % 400 == 0){
    print("It is a leap year");
}
if ($my_year % 4 == 0){
   print("It is a leap year");
}
else if ($my_year % 100 == 0){
   print("It is not a leap year");
}
else{
   print("It is not a leap year");
}

}

 //oefening 1.5C
 function factuur(int $amount, int $amountOfKids) : float {
   $bonus = 0;
    if ($amountOfKids <= 2){
       $bonus = 0.10;
    }
   if ($amount <= 50){
      $bill = $amount * 0.15;
      return $bill + ($bill * $bonus);
   }
   else if($amount <= 150){
      $bill = ((50 * 0.15) + ($amount - 50) * 0.25);
      return $bill + ($bill * $bonus);
   }
   else if($amount > 150){
      $bill = (50 * 0.15) + ($amount - 50) * 0.25 + ($amount - 150) * 0.30;
      return $bill + ($bill * $bonus);
   }
 }
 