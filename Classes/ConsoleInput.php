<?php

namespace classes\Classes;


class ConsoleInput
{

    public static function input($label)
    {
        echo "$label\n";
        return readline('');
    }
}