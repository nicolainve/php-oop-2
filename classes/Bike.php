<?php

class Bike {

    public $model;
    public $brand;

    public function __construct($model, $brand) {
        $this->model = $model;
        $this->brand = $brand;
    }
}