<?php
class logger {
    public function log($message){
        $this->saveToFile($message);
    }
}