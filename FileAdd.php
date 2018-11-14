<?php

namespace classes;

class FileAdd implements iAddTags
{
    public function addTags($filename)
    {
        $read = fopen($filename, "r");
        if ($read) {
            while (($lines = fgets($read)) !== false) {
                $start_str = substr_replace($lines, '<p>', 0, 0);
                $finish_str = substr_replace($start_str, '</p> <br/>', strlen($start_str), 0);
                return $finish_str ;
            }
        }else{
            return "err";
        }
        fclose($read);
    }
}