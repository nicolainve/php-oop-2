<?php
include_once __DIR__ . '/Bike.php';

class MTB extends Bike {
    public $range;

    public function __construct($model, $brand, $range) {
        parent::__construct($model, $brand);
        $this->range = $range * 50 . 'KWh';
    }

    public function printName() {
        return $this->brand . ' ' . $this->model . ' ' . $this->range . "<br>";
    }
}