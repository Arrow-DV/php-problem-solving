<?php
function chessBoard(int $rows, int $columns): array
{
    $result = [];
    $start_symbol = "O";

    for ($i = 0; $i < $rows; $i++) {
        $current_symbol = $start_symbol;
        for ($j = 0; $j < $columns; $j++) {
            $result[$i][$j] = $current_symbol;
            $current_symbol = ($current_symbol == "O") ? "X" : "O";
        }
        $start_symbol = ($start_symbol == "O") ? "X" : "O";
    }

    return $result;
}
