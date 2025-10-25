<?php
  
function validatePin(string $pin): bool {
  $pattern = "/^\d{4}$|^\d{6}$/";
    return preg_match($pattern,$pin); // your code here
}