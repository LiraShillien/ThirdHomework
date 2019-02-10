<?php
function mergeSort(&$a, $p, $r)
{
    if ($p < $r) {
        $q = (int)(($p + $r) / 2);

        mergeSort($a, $p, $q);
        mergeSort($a, $q + 1, $r);

        merge($a, $p, $q, $r);
    }
}

function merge(&$a, $p, $q, $r)
{
    for ($i = $p; $i <= $q; $i++) {
        $left[] = $a[$i];
    }

    for ($i = $q + 1; $i <= $r; $i++) {
        $right[] = $a[$i];
    }

    $left[] = -INF;
    $right[] = -INF;

    $y = 0;
    $z = 0;

    for ($i = $p; $i <= $r; $i++) {
        if ($left[$y] >= $right[$z]) {
            $a[$i] = $left[$y];
            $y++;
        } else {
            $a[$i] = $right[$z];
            $z++;
        }
    }
}

$a = [1,8,2,9,3,55,0,44,4];
mergeSort($a, 0, count($a) - 1);
echo json_encode($a), PHP_EOL;
