<?php
require __DIR__ . '/vendor/autoload.php';

$fileAdd = new classes\FileAdd();
$consoleAdd = new classes\ConsoleAdd();
$console = new classes\ConsoleInput();
$files = new classes\FileInput();

start:
echo "Если Вы хотите добавить теги - введите 0\nЕсли Вы хотите убрать теги - введите 1\n";
$check = readline('');
if ($check === '0') {
    add:
    echo "Если Вы хотите ввести данные через консоль - введите 0\nEсли хотите указать путь к файлу - введите 1\n";
    $checkAdd = readline('');
    if ($checkAdd === '0') {
        echo "Введите вашу строку: ";
        $read = readline('');
        $result = $consoleAdd->addTags($read);
        echo "$result \n";
    } elseif ($checkAdd === '1') {
        echo "Введите путь к файлу: ";
        $filename = readline('') ;
        $result = $fileAdd->addTags($filename);
        echo "$result\n";
    } else {
        echo "Упс! Попробуйте ещё раз...\n";
        goto add;
    }
} elseif ($check === '1') {
    strip:
    echo "Если Вы хотите ввести данные через консоль - введите 0\nEсли хотите указать путь к файлу - введите 1\n";
    $checkStrip = readline('');
    if ($checkStrip === '0') {
        echo "Введите вашу строку: ";
        $read = readline('');
        $result = $console->input($read);
        echo "$result\n";
    } elseif ($checkStrip === '1') {
        echo "Введите путь к файлу: ";
        $filename = readline('');
        $result = $files->input($filename);
        echo "$result\n";
    } else {
        echo "Упс! Попробуйте ещё раз...\n";
        goto strip;
    }
} else {
    echo "Упс! Начнем с начала...\n";
    goto start;
}