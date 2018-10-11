<?php
include_once ("iInputInterface.php");

class FileInput implements iInputInterface{

    public function input(){
        $filename = readline('');
        $content = file_get_contents($filename);
        $newData = strip_tags($content);
        echo $newData;
    }
}
class ConsoleInput implements iInputInterface{
    public function input(){
        $data = readline('');
        $newData = strip_tags($data);
        echo $newData;
    }
}