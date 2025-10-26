<?php


function land_perimeter($arr) {
    $result = 0;

    for ($row = 0; $row < count($arr); $row++) {

        for ($col = 0; $col < strlen($arr[$row]); $col++) {

            if ($arr[$row][$col] == 'X') {

                if ($row == 0 || $arr[$row - 1][$col] == 'O') {
                    $result++;
                }

                if ($row == count($arr) - 1 || $arr[$row + 1][$col] == 'O') {
                    $result++;
                }

                if ($col == 0 || $arr[$row][$col - 1] == 'O') {
                    $result++;
                }

                if ($col == strlen($arr[$row]) - 1 || $arr[$row][$col + 1] == 'O') {
                    $result++;
                }
            }
        }
    }
    return "Total land perimeter: $result";
}
    