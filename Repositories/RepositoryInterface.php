<?php

namespace classes\Repositories;


interface RepositoryInterface
{
    /**
     * @return string
     */
    public function getData(): string;
}