<?php
class Paper
{
    private $observers = [];
    
    public function register($sub)
    {
        $this->observers[] = $sub;
    }
    
    public function trigger()
    {
        if (!empty($this->observers)) {
            foreach ($this->observers as $observer) {
                $observer->update();
            }
        }
    }
}

interface Observerable
{
    public function update();
}

class Subscriber implements Observerable
{
    public function update()
    {
        echo 'Subscriber callback';
    }
}

$paper = new Paper();
$paper->register(new Subscriber());
$paper->trigger();

?>