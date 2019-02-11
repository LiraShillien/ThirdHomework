<?php
function bubbleSort(&$a)
{
    for($i = 1; $i < count($a)-1; $i++){
        for($j = count($a)-1; $j >= $i; $j--){
            if($a[$j] < $a[$j-1]){
                $temp = $a[$j];
                $a[$j] = $a[$j-1];
                $a[$j-1] = $temp;
            }
        }
    }
    return($a);
}
$a = [66,33,5,44,88,1,6];
var_export(bubbleSort($a));