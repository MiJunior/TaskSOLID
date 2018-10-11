<?php
class BirdRun {
    private $bird;

    public function __construct($bird){
        $this->bird = $bird;
    }
    public function run(){
        $flySpeed = $this->bird->fly();
    }
}