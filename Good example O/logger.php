<?php
class FileLogger implements ILogger {
    public function saveToFile(){
        //save to file  
    }
    public function log($message){
        $this->saveToFile($message);
    }
}
class DBLogger implements ILogger {
    public function saveToDB(){
        //save to database
    }
    public function log(){
        $this->saveToDB();
    }
}