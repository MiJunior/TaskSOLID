<?php

namespace classes;


class FileInput implements iInputInterface
{
    public function input()
    {
        echo "Введите путь к файлу: ";
        $filename = readline('');
        $content = file_get_contents($filename);
        $newData = strip_tags($content);
        echo $newData . "\n";
    }
}

