<?php

namespace classes;

class FileAdd implements iAddTags
{
    public function addTags()
    {
        echo "Введите путь к файлу: ";
        $filename = readline('');
        $read = fopen($filename, "r");
        if ($read) {
            while (($lines = fgets($read)) !== false) {
                $start_str = substr_replace($lines, '<p>', 0, 0);
                $finish_str = substr_replace($start_str, '</p> <br/>', strlen($start_str), 0);
                echo $finish_str . "\n";
            }
        }
        if (!feof($read)) {
            echo "Ошибка: fgets() неожиданно потерпел неудачу\n";
        }
        fclose($read);
    }
}