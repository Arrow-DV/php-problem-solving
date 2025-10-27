<?php

function jumpingNumber($n) {
    if ($n < 10) {
        return "Jumping!!";
    }

    $lastDigit = $n % 10;

    $n = intdiv($n, 10);

    while ($n > 0) {
        $currentDigit = $n % 10;

        $diff = abs($currentDigit - $lastDigit);

        if ($diff != 1) {
            return "Not!!";
        }

        $lastDigit = $currentDigit;
        $n = intdiv($n, 10);
    }

    return "Jumping!!";
}
