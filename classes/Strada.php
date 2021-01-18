<?php
include_once __DIR__ . '/Bike.php';

class Strada extends Bike {
    public $gear;

    public function __construct($model, $brand, $gear) {
        parent::__construct($model, $brand);
        $this->gear = $gear;
    }

    public function printName() {
        return $this->brand . ' ' . $this->model . ' ' . $this->gear . "<br>";
    }
}