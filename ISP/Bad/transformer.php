<?php
class SuperTransformer implements ISuperTransformer{
    public function toCar(){
        echo "transform to car";
    }
    public function toPlain(){
        echo "transform to Plain";
    }
    public function toShip(){
        echo "transform to Ship";
    }
}
class CarTransformer implements ISuperTransformer{
    public function toCar(){
        echo "transform to car";
    }
    public function toPlain(){
        echo "i can`t transform to Plain";
    }
    public function toShip(){
        echo "i can`t transform to Ship";
    }
} 