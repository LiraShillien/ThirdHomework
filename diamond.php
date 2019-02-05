<?php

function getDiamond($height)
{
    $size = $height;
    for ($i = 1; $i <= $height; $i += 2) {
        echo str_repeat('-', --$size), str_repeat('#', $i), PHP_EOL;
    }
    for ($j = $height; $j > 1; $j -= 2) {
        echo str_repeat('-', ++$size), str_repeat('#', $j - 2), PHP_EOL;
    }
}

function isValid($height)
{
    if(!is_numeric($height) || $height%2 == 0){
        return FALSE;
    }else{
        return TRUE;
    }
}

if(isValid($argv[1])){
    getDiamond($argv[1]);
}else{
    echo 'Please, enter odd number', PHP_EOL;
}


