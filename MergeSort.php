<?php
function mergeSort(&$mas, $s, $f)
{
    if ($s < $f){
        $q = (int)(($s + $f) / 2);
        mergeSort($mas, $s, $q);
        mergeSort($mas, $q + 1, $f);
        merge($mas, $s, $q, $f);
    }
}

function merge(&$mas, $s, $q, $f)
{
    for ($i = $s; $i <= $q; $i++){
        $subMasLeft[] = $mas[$i];
    }

    for ($i = $q + 1; $i <= $f; $i++){
        $subMasRight[] = $mas[$i];
    }

    $subMasLeft[] = -INF;
    $subMasRight[] = -INF;

    $l = 0;
    $r = 0;

    for ($i = $s; $i <= $f; $i++) {
        if ($subMasLeft[$l] >= $subMasRight[$r]) {
            $mas[$i] = $subMasLeft[$l];
            $l++;
        }else{
            $mas[$i] = $subMasRight[$r];
            $r++;
        }
    }
}

$a = [1,6,2,8,3,9,11,10,22,14,7];
mergeSort($a, 0, count($a) - 1);
echo json_encode($a), PHP_EOL;
