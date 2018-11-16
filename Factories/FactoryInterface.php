<?php

namespace classes\Factories;

interface FactoryInterface
{
    /**
     * @const string
     */
    public const PROCESSING_TYPE_FILE = 'file';

    /**
     * @return FactoryInterface
     */
    public static function getInstance(): FactoryInterface;

    /**
     * @param string $type
     * @return mixed
     */
    public function getObject(string $type);
}