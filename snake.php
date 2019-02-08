<?php

function snake($input)
{
    $values = $input**2;
    $arr = range(1, $values);
    $snake = array_chunk($arr,$input);
    foreach ($snake as $key => &$value){
        if ($key % 2 == 1) {
            $value = array_reverse($value);
        }
    }
    return $snake;
}

function output($array)
{
    foreach($array as $val) {
        foreach ($val as $num) {
            echo "$num ";
        }
        echo PHP_EOL;
    }
}

function isValid($input)
{
    if(!is_numeric($input) || $input <= 0){
        return FALSE;
    }else{
        return TRUE;
    }
}

if(array_key_exists(1, $argv) && isValid($argv[1])){
    output(snake($argv[1]));
}else{
    echo 'Please, enter number above 0', PHP_EOL;
}


