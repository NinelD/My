<?php
class Cafe {
    public $drink;
    public $salad;

    public function __construct ($drink, $salad)
    {
        $this->drink=$drink;
        $this->salad=$salad;

    }
}
$rop = new Cafe();
