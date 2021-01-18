<?php
include_once __DIR__ . '/Bike.php';

class City extends Bike {

    public function printName() {
        return $this->brand . ' ' . $this->model . "<br>";
    }
}