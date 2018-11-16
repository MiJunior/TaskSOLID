<?php

namespace classes\Repositories;


use classes\Classes\ConsoleInput;

class RepositoryFile implements RepositoryInterface
{
    /**
     * @inheritdoc
     */
    public function getData(): string
    {
        $file = ConsoleInput::input('Please fill file path:');
        return file_get_contents($file);
    }
}