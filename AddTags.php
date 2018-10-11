<?php
include_once ("iAddTags.php");

class ConsoleAdd implements iAddTags{
    public function addTags(){
        $read = readline('');
        $start_str = substr_replace($read,'<p>',0,0);
        $finish_str = substr_replace($start_str,'</p> <br/>',strlen($start_str),0);
        echo $finish_str."\n";
    }
}
class FileAdd implements iAddTags{
    public function addTags(){
        $filename = readline('');
        $read = fopen($filename, "r");
        if($read){
            while(($lines = fgets($read)) !== false){
                $start_str = substr_replace($lines,'<p>',0,0);
                $finish_str = substr_replace($start_str,'</p> <br/>',strlen($start_str),0);
                echo $finish_str."\n";
            }
        }
        if (!feof($read)) {
            echo "Ошибка: fgets() неожиданно потерпел неудачу\n";
        }
        fclose($read);
    }
}