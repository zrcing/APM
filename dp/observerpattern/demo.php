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
                $observer->handle();
            }
        }
    }
}

interface Observerable
{
    public function handle();
}

class Subscriber implements Observerable
{
    public function handle()
    {
        echo 'Subscriber callback';
    }
}

$paper = new Paper();
$paper->register(new Subscriber());
$paper->trigger();

?>