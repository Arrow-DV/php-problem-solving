<?php



function weatherInfo(int $temp): string
{
  $c= convertToCelsius($temp);
    if($c <= 0) {
      return ($c . " is freezing temperature");
    } else {
      return ($c . " is above freezing temperature");
    }
}
    
function convertToCelsius(int $temperature): int
{
    $celsius = ($temperature - 32) * (5/9);
    return $celsius;
} 