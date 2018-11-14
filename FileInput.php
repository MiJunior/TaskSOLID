<?php

namespace classes;


class FileInput implements iInputInterface
{
    public function input($filename)
    {
        $content = file_get_contents($filename);
        $newData = strip_tags($content);
        return $newData;
    }
}

