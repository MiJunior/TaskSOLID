<?php
require __DIR__ . '/vendor/autoload.php';

use classes\Factories\RepositoryFactory;
use classes\Repositories\RepositoryInterface;
use classes\Services\TextService;
use classes\Classes\ConsoleInput;


$check = ConsoleInput::input('Please check a one from way ("file" or "console"):');

/**
 * @var RepositoryInterface $repository
 */
$repository = RepositoryFactory::getInstance()->getObject($check);
$data = $repository->getData();


$service = new TextService();

$process = ConsoleInput::input('Choose one from way ("Add tags" or "Clear tags"):');

switch ($process) {
    case TextService::PROCESS_ADD_TAGS:
        $processedData = $service->addTags($data);
        break;
    case TextService::PROCESS_CLEAR_TAGS:
        $processedData = $service->clearTags($data);
        break;
    default:
        $processedData = "You has wrote incorrect data";
}

echo $processedData;