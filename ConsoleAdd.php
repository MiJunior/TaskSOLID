<?php

namespace classes;

class ConsoleAdd implements iAddTags
{
    public function addTags()
    {
        echo "Введите вашу строку: ";
        $read = readline('');
        $start_str = substr_replace($read, '<p>', 0, 0);
        $finish_str = substr_replace($start_str, '</p> <br/>', strlen($start_str), 0);
        echo $finish_str . "\n";
    }
}

