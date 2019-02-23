<?php

function fibo($x)
{
    $arr = [1,1];
    $i = 0;
    while(!array_key_exists($x,$arr)){
        $arr[] = $arr[$i] + $arr[$i+1];
        $i++;
    }
    return $arr[$x];
}
echo fibo(8);