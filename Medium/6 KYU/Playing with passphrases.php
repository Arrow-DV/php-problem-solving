<?php
function playPass($s, $n) {
    $result = '';

    for ($i = 0; $i < strlen($s); $i++) {
        $char = $s[$i];

        if (ctype_alpha($char)) {
            $base = ctype_upper($char) ? 'A' : 'a';
            $shifted = chr(((ord($char) - ord($base) + $n) % 26) + ord($base));
            $char = $shifted;
        }

        elseif (ctype_digit($char)) {
            $char = 9 - $char;
        }

        if ($i % 2 == 0) {
            $char = strtoupper($char);
        } else {
            $char = strtolower($char);
        }

        $result .= $char;
    }

    return strrev($result);
}
