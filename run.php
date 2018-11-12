<!-- Реализуйте анонимную функцию, которая принимает на вход строку и возвращает 
ее последний символ (или null если строка пустая). 
Запишите созданную функцию в переменную $last.


$last(''); // => null
$last('pow'); // => w
$last('kids'); // => s -->

<?php

function run(string $text)
{
    $last = function ($text) {
        if (empty($text)) {
            return null;
        } return $text[strlen($text) - 1];
    };

    return $last($text);
}