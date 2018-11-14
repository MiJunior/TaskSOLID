<?php

namespace classes;

class ConsoleAdd implements iAddTags
{
    public function addTags($read)
    {
        $start_str = substr_replace($read, '<p>', 0, 0);
        $finish_str = substr_replace($start_str, '</p> <br/>', strlen($start_str), 0);
        return $finish_str;
    }
}

