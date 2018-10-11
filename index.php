<?php
require_once ("Input.php");
$console = new ConsoleInput();
$files = new FileInput();
start:
echo "Если Вы хотите ввести данные через консоль - введите 1\nEсли хотите указать путь к файлу - введите 2\n";
$check = readline('');
if($check == 1){
    $console->input();
}elseif($check == 2){
    $files->input();
}else{
    echo "Введите одно из доступных значений!\n";
    goto start;
}