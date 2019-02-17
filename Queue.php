<?php

class Stack
{
    public $stack = [];

    public function stackPop()
    {
        if (!$this->isEmpty()) {
           return array_pop($this->stack);
        }
    }

    public function stackPush($item)
    {
        array_push($this->stack, $item);
    }

    public function isEmpty()
    {
        return (empty($this->stack))
            ? TRUE
            : FALSE;
    }
}


class Queue
{
    public $s1;
    public $s2;

    public function setStack($a,$b){
        $this->s1 = $a;
        $this->s2 = $b;
    }

    public function enqueue($item)
    {
        $this->s1->stackPush($item);
    }

    public function dequeue()
    {
        if($this->s1->isEmpty() && $this->s2->isEmpty()){
            echo 'queue is empty';
        }else {
            while (!$this->s1->isEmpty()) {
                $this->s2->stackPush($this->s1->stackPop());
            }
        }
        $temp = $this->s2->stackPop();
        $this->returnValues();
        return $temp;
    }

    public function returnValues()
    {
        for($i=count($this->s2->stack)-1;$i>=0;$i--) {
            $this->s1->stackPush($this->s2->stack[$i]);
        }
    }
}

//$obj = new Queue();
//$a = new Stack();
//$b = new Stack();
