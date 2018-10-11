<?php
require_once ("Input.php");
require_once ("AddTags.php");

$fileAdd = new FileAdd();
$consoleAdd = new ConsoleAdd();
$console = new ConsoleInput();
$files = new FileInput();

start:
echo "Если Вы хотите добавить теги - введите 0\nЕсли Вы хотите убрать теги - введите 1\n";
$check = readline('');
if($check == 0){
    add:
    echo "Если Вы хотите ввести данные через консоль - введите 0\nEсли хотите указать путь к файлу - введите 1\n";
    $checkAdd = readline('');
    if($checkAdd == 0){
        $consoleAdd->addTags();
    }elseif($checkAdd == 1){
        $fileAdd->addTags();
    }else{
        echo "Упс! Попробуйте ещё раз...\n";
        goto add;
    }
}elseif($check == 1){
    strip:
    echo "Если Вы хотите ввести данные через консоль - введите 0\nEсли хотите указать путь к файлу - введите 1\n";
    $checkStrip = readline('');
    if($checkStrip == 0){
        $console->input();
    }elseif($checkStrip == 1){
        $files->input();
    }else{
        echo "Упс! Попробуйте ещё раз...\n";
        goto strip;
    }
}else{
    echo "Упс! Начнем с начала...\n";
    goto start;
}