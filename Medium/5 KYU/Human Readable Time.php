<?php

function human_readable($seconds) {
    $minutes = floor(($seconds % 3600) / 60);    $hours = floor($seconds / 3600);
    $seconds = $seconds % 60;    
    $hours_format=str_pad($hours,2,"0",STR_PAD_LEFT);
    $minutes_format=str_pad($minutes,2,"0",STR_PAD_LEFT);
    $seconds_format=str_pad($seconds,2,"0",STR_PAD_LEFT);
    return "$hours_format:$minutes_format:$seconds_format";
}
