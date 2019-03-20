<?php

class Car
{
    private $mark;
    private $year;
    private $model;
    private $vinCode;

    public function setMark($mark)
    {
        $this->mark = $mark;
    }

    public function getMark()
    {
        return $this->mark;
    }

    public function echoSort()
    {
        echo $this->getMark() . ' is car' . PHP_EOL;
    }

}

class Passenger extends Car
{
    private $equipment;

    public function echoSort()
    {
        echo $this->getMark() . ' is passenger car' . PHP_EOL;
    }
}

class Truck extends Car
{
    private $carrying;

    public function echoSort()
    {
        echo $this->getMark() . ' is truck car' . PHP_EOL;
    }
}

$audi = new Passenger();
$kamaz = new Truck();

$audi->setMark('Audi');
$kamaz->setMark('Kamaz');

$cars[] = $audi;
$cars[] = $kamaz;

foreach($cars as $car){
    if($car instanceof Car){
        $car->echoSort();
    }else{
        echo ' this is not car';
    }
}