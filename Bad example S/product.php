<?php
class Product{
    public function setPrice(){
        try{
            //save price in db
        }catch(DBException $e){
            $this->logError($e->getMessage());
        }
    }
    public function logError($error){
      //save error message
    } 
}