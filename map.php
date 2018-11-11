<!-- Реализуйте функцию wordsCount, которая считает количество одинаковых слов в предложении. Результатом функции является ассоциативный массив, в ключах которого слова из исходного текста, а значения это количество повторений.

Пример:


wordsCount(''); // []
wordsCount('  one two one'); // ['one' => 2, 'two' => 1]
wordsCount('  one      two       one     '); // ['one' => 2, 'two' => 1] -->

<?php

function wordsCount($str)
{
    $resultArray = [];
    $pieces = explode(" ", $str);
    foreach ($pieces as $piece) {
        if (empty($piece)) {
            continue;
        }
        if (!array_key_exists($piece, $resultArray)) {
            $resultArray[$piece] = 1;
        } else {
            $resultArray[$piece] += 1;
        }
    }
    return $resultArray;
}