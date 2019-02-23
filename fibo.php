<?php

function fibo($x)
{
    $arr = [1,1];

    for($i=0; $i<INF;$i++){
            $arr[] = $arr[$i] + $arr[$i + 1];
            if(array_key_exists($x,$arr)){
                break;
            }
    }
    return $arr[$x];
}
echo fibo(0);