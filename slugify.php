<!-- Слаг - часть адреса сайта которая используется для идентификации ресурса 
в Человекопонятном виде. 
Без слага /posts/3, со слагом /posts/my-super-post, где слаг это my-super-post. 
Слаг обычно генерируется автоматически на основе названия ресурса, например статьи. 

Функция выполняющую трансляцию текста в слаг есть и в библиотеке Funct:


\Funct\Strings\slugify('Global Thermonuclear Warfare'); // => 'global-thermonuclear-warfare'
\Funct\Strings\slugify('Crème brûlée'); // => 'creme-brulee'
src\Slugify.php
Реализуйте функцию slugify самостоятельно не прибегая к \Funct\Strings\slugify. 
Преобразования которые она должна делать:

Приводить к нижнему регистру все символы в строке
Удалять все пробелы
Соединять слова с помощью дефисов

slugify(''); // ''
slugify('test'); // 'test'
slugify('test me'); // 'test-me'
slugify('La La la LA'); // 'la-la-la-la'
slugify('O la      lu'); // 'o-la-lu'
slugify(' yOu   '); // 'you' -->

<?php

use Funct;

function slugify($text)
{
    $tolower = Funct\Strings\toLower($text);
    $array = explode(" ", $tolower);
    $compact = Funct\Collection\compact($array);
    $dash_separated = implode("-", $compact);
    return $dash_separated;
}