<?php

function position(string $alphabet): string 
{
  return "Position of alphabet: ". (string)array_search(strtolower($alphabet),range('a','z')) + 1;
  
}