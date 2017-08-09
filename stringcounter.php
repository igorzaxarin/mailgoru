<?php

//Получить первый аргумент из вызова
$file = $argv[1];
//Текущий рабочий каталог
$currentDir = getcwd();
//Переменная для хранения абсолютного пути к файлу
$absolutePathToFile = '';

if(substr($file,0,1) == DIRECTORY_SEPARATOR){
    $absolutePathToFile = $file;
}
else{
    $absolutePathToFile = $currentDir.DIRECTORY_SEPARATOR.$file;
}

$stringCounter = 0;

//Открываем файл только на чтение
$fileRes = fopen($absolutePathToFile,'r');
//Пока не достигли конца файла, производим чтение строк
while(!feof($fileRes)){
    fgets($fileRes);
    $stringCounter++;
}
fclose($fileRes);

echo $stringCounter."\n";