<?php

class Queue
{
    public $string = '';
    public $array = ['(' => ')', '{' => '}', '<' => '>', '[' => ']'];
    public $queue = [];


    public function setString($string)
    {
        $this->string = $string;
    }

    public function leftHalf()
    {
        if ($this->isEven()) {
            for ($i = 0; $i < ($this->queueCount() / 2); $i++) {
                $this->queue[] = $this->string[$i];
            }
        } else {
            echo 'the number of characters must be even';
        }
    }

    public function queuePeek()
    {
        if (!$this->isEmpty()) {
            return array_shift($this->queue);
        }
    }

    public function isEmpty()
    {
        return (empty($this->queue))
            ? TRUE
            : FALSE;
    }

    public function queueCount()
    {
        return strlen($this->string);
    }

    public function isEven()
    {
        if (strlen($this->string) % 2 == 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
}

class Stack
{
    public $str;
    public $stack = [];

    public function setStr($myStr)
    {
        $this->str = $myStr;
    }

    public function rightHalf()
    {
        if ($this->str->isEven()) {
            for ($i = ($this->str->queueCount() / 2); $i < $this->str->queueCount(); $i++) {
                $this->stack[] = $this->str->string[$i];
            }
        }
    }

    public function stackPop()
    {
        return array_pop($this->stack);
    }


    public function isStringCorrect()
    {
        $a = 0;
        while (!$this->str->isEmpty()) {
            $q = $this->str->queuePeek();
            $s = $this->stackPop();
            foreach ($this->str->array as $key => $value) {
                if ($q == $key && $s == $value) {
                    $a++;
                }
            }
        }
        if ($a == $this->str->queueCount() / 2) {
            return TRUE . PHP_EOL;
        } else {
            return FALSE . PHP_EOL;
        }
    }
}

$obj = new Stack;
$myStr = new Queue();
$obj->setStr($myStr);
$obj->str->setString('{<[]>}');
$obj->str->leftHalf();
$obj->rightHalf();
echo $obj->isStringCorrect();

// Можно было проще и короче, но так как малознакома с ООП - экспериментирую=)