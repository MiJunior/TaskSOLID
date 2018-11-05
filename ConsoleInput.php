<?php

namespace classes;

class ConsoleInput implements iInputInterface
{
    public function input()
    {
        echo "Введите вашу строку: ";
        $data = readline('');
        $newData = strip_tags($data);
        echo $newData . "\n";
    }
}