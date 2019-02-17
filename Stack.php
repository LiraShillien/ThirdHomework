<?php

class Queue
{
    public $queue = [];

    public function firstValue()
    {
        if (!$this->isEmpty()) {
            return array_shift($this->queue);
        }
    }

    public function queuePush($item)
    {
        array_push($this->queue, $item);
    }

    public function isEmpty()
    {
        return (empty($this->queue))
            ? TRUE
            : FALSE;
    }

    public function queueCount()
    {
        return count($this->queue);
    }
}

class Stack
{
    public $q1;
    public $q2;

    public function setQueue($a, $b)
    {
        $this->q1 = $a;
        $this->q2 = $b;
    }

    public function setValue($item)
    {
        $this->q1->queuePush($item);
    }

    public function getValue()
    {
        if ($this->q1->isEmpty() && $this->q2->isEmpty()) {
            echo 'stack is empty';
        } else {
            while ($this->q1->queueCount() > 1) {
                $this->q2->queuePush($this->q1->firstValue());
            }
        }
        $this->returnValues();
        return $this->q1->queue[0];
    }

    public function returnValues()
    {
        for ($i = 0; $i < count($this->q2->queue); $i++) {
            $this->q1->queuePush($this->q2->queue[$i]);
        }
    }
}

//$obj = new Stack();
//$a = new Queue();
//$b = new Queue();

