<?php

namespace classes\Repositories;


use classes\Classes\ConsoleInput;

class RepositoryConsole implements RepositoryInterface
{
    /**
     * @inheritdoc
     */
    public function getData(): string
    {
        return ConsoleInput::input('Please type your text:');
    }
}