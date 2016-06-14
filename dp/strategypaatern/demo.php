<?php

interface FlyBehavior
{
    public function fly();
}

class FlyWithWings implements FlyBehavior
{
    public function fly()
    {
        echo 'Fly with wings';
    }
}

class FlyWithNo implements FlyBehavior
{
    public function fly()
    {
        echo 'Fly with no wings';
    }
}

class Duck
{
    private $flyBehavior;
    
    public function performFly()
    {
        $this->flyBehavior->fly();
    }
    
    public function setFlyBehavior(FlyBehavior $flyBehavior)
    {
        $this->flyBehavior = $flyBehavior;
    }
}

class RubberDuck extends Duck
{
    
}

$duck = new RubberDuck();
$duck->setFlyBehavior(new FlyWithWings());
$duck->performFly();

$duck->setFlyBehavior(new FlyWithNo());
$duck->performFly();