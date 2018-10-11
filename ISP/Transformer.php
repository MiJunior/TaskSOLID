<?php
class SuperTransformer implements ICarTransformer, IPlainTransformer, IShipTransformer{
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
class CarTransformer implements ICarTransformer{
    public function toCar(){
        echo "transform to car";
    }
} 