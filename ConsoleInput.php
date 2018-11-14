<?php

namespace classes;

class ConsoleInput implements iInputInterface
{
    public function input($data)
    {
        $newData = strip_tags($data);
        return $newData;
    }
}