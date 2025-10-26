<?php



class Arith
{
    public $currentNumber;
    public $original_array = [
        0 => "zero",
        1 => "one",
        2 => "two",
        3 => "three",
        4 => "four",
        5 => "five",
        6 => "six",
        7 => "seven",
        8 => "eight",
        9 => "nine",
        10 => "ten",
        11 => "eleven",
        12 => "twelve",
        13 => "thirteen",
        14 => "fourteen",
        15 => "fifteen",
        16 => "sixteen",
        17 => "seventeen",
        18 => "eighteen",
        19 => "nineteen",
        20 => "twenty"
    ];
    public function __construct($new_numb)
    {
        $this->currentNumber = $new_numb;
    }
    public function add(string $number_to_add)
    {
        $fliped = array_flip($this->original_array);
        $new_index = $fliped[$number_to_add] + $fliped[$this->currentNumber];
        return $this->original_array[$new_index];
    }
}
