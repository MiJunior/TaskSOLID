<?php
class Bird {
    public function fly(){
        $flySpeed = 10;
        return $flySpeed;
    }
}
/**
* Дочерний класс от Bird
* не изменяет класс, но дополняет его
* не нарушает принцып  Лисков
*/
class Duck extends Bird{
    public function fly(){
        $flySpeed = 8;
        return $flySpeed;
    }
    public function swim(){
        $swimSpeed = 2;
        return $swimSpeed;
    }
}
/**
 * Дочерний класс от Bird
 * Изменяет поведение,
 * нарушает принцип Лисков
 */
class Penguin extends Bird{
    public function fly(){
        return 'i can`t fly :(';//не типичное поведение, вместо integer возвращаем строку
    }
    public function swim(){
        $swimSpeed = 20;
        return $swimSpeed;
    }
}