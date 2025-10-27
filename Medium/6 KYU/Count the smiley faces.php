<?php

function count_smileys($arr): int
{
    $counter = 0;
    foreach ($arr as $face) {
        if (strlen($face) == 3) {

            $eye = $face[0];
            $nose = $face[1];
            $mouth = $face[2];
            if (
                in_array($eye, [":", ";"]) && in_array($nose, ["-", "~"]) && in_array($mouth, [")", "D"])
            ) {
                $counter++;
            }
        } else if (strlen($face) == 2) {
            $eye = $face[0];
            $mouth = $face[1];

            if (
                in_array($eye, [":", ";"]) && in_array($mouth, [")", "D"])
            ) {
                $counter++;
            }
        }
    }
    return $counter;
}
