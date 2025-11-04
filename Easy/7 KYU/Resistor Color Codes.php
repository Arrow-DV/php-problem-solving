<?php

function decodeResistorColors($bands) {
    $colors = [
        "black" => 0, "brown" => 1, "red" => 2, "orange" => 3,
        "yellow" => 4, "green" => 5, "blue" => 6, "violet" => 7,
        "gray" => 8, "white" => 9
    ];

    $toleranceColors = [
        "gold" => 5,
        "silver" => 10
    ];

    $bandsArray = explode(" ", trim($bands));
    $count = count($bandsArray);

    $first = $colors[$bandsArray[0]];
    $second = $colors[$bandsArray[1]];

    $power = $colors[$bandsArray[2]];

    $ohms = ($first * 10 + $second) * pow(10, $power);

    $tolerance = $count === 4 ? ($toleranceColors[$bandsArray[3]] ?? 20) : 20;

    if ($ohms >= 1000000) {
        $displayValue = ($ohms / 1000000);
        if (fmod($displayValue, 1) == 0) $displayValue = intval($displayValue);
        return "{$displayValue}M ohms, {$tolerance}%";
    } elseif ($ohms >= 1000) {
        $displayValue = ($ohms / 1000);
        if (fmod($displayValue, 1) == 0) $displayValue = intval($displayValue);
        return "{$displayValue}k ohms, {$tolerance}%";
    } else {
        return "{$ohms} ohms, {$tolerance}%";
    }
}