<?php


function info(string $name) {
  echo "hello {$name}";
}



/**
 * create Title function
 */

function createTitle(string $title, string $tag = "h1" , string $align = "center", string $color = "green"){
  echo "<{$tag} style=\"text-align:{$align}; color:{$color}\">{$title} </{$tag}>";
}




/**
 * create otp function 
 */

function createOtp(){
  // otp string 
  $otpString = "0123456789";
  
  // rand otp
  $randOtp = str_shuffle($otpString);
  
  // create otp and return
  return substr($randOtp, 2, 5); 
  
}



?>