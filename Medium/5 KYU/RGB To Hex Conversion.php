<?php
function rgb($r, $g, $b)
{
    $r = max(0,min(255,$r));
    $b = max(0,min(255,$b));
    $g = max(0,min(255,$g));

    $result = "";
    if ($r <= 0 && $g <= 0 && $b <= 0) {
        return "000000";
    } else {
        $red_hex = str_pad(dechex($r),2,"0",STR_PAD_LEFT);
        $green_hex = str_pad(dechex($g),2,"0",STR_PAD_LEFT);
        $blue_hex = str_pad(dechex($b),2,"0",STR_PAD_LEFT);
        
        $result .= strtoupper("$red_hex$green_hex$blue_hex");
    }
    return $result;
}
