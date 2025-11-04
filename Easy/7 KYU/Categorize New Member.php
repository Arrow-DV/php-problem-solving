<?php
  
function open_or_senior(array $data): array {
    $output = [];
    for($i = 0 ; $i < count($data);$i++){
            if($data[$i][0] >= 55  && $data[$i][1] > 7){
                $output[] = "Senior";
            }
            else{
                $output[] = "Open";
            }
        
    }   
    return $output;
}