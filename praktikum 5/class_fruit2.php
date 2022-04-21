<?php
class Fruit{
    public $name;
    protected $color;
    private $weight;

    function name($n) {
        $this->name =$n;
    }
    protected function color($n) {
        $this->color = $n;
    }
    private function weight($n) {
        $this->weight =$n;
    }
}

$mango = new Fruit();
$mango->name('Mango'); // ok
$mango->color('Yellow'); //error
$mango->weight('300'); //error
?>