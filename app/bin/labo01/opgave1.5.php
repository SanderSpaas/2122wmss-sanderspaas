<?php

/**
 * Exercise 1.5
 * @author Sander Spaas sander.spaas@student.odisee.be
 */

 $parameter = $argv[1];
 if (isPalindrome($parameter)){
    echo $parameter . ' is a palindrome.';
 }
 else{
    echo $parameter . ' is not a palindrome.';
 }


 function isPalindrome(string $string) : bool {
   return $string === strrev($string);
   /*of: if(strrev($string) === $string) {
       return true;
    }
    return false;
    */
 }