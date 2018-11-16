<?php

namespace classes\Factories;

use classes\Repositories\RepositoryConsole;
use classes\Repositories\RepositoryFile;
use classes\Repositories\RepositoryInterface;

class RepositoryFactory implements FactoryInterface
{
    /**
     * @var FactoryInterface|null
     */
    private static $instance = null;

    private function __construct()
    {
    }

    /**
     * @inheritdoc
     */
    public static function getInstance(): FactoryInterface
    {
        if (!self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    /**
     * @param string $type
     * @return RepositoryInterface
     */
    public function getObject(string $type): RepositoryInterface
    {
        switch ($type) {
            case self::PROCESSING_TYPE_FILE:
                return new RepositoryFile();
            default:
                return new RepositoryConsole();
        }
    }
}