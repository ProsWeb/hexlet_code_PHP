<!-- Реализуйте функцию wordsCount, которая считает количество одинаковых слов в предложении. 
Результатом функции является ассоциативный массив, в ключах которого слова из исходного текста, 
а значения это количество повторений.

Пример:

wordsCount(''); // []
wordsCount('  one two one'); // ['one' => 2, 'two' => 1]
wordsCount('  one      two       one     '); // ['one' => 2, 'two' => 1] -->

<?php

function wordsCount($str)
{
    $exploded = explode(' ', $str);
    $result = [];
    foreach ($exploded as $value) {
        if (empty($value)) {
            continue;
        } elseif (!array_key_exists($value, $result)) {
            $result[$value] = 1;
        } else {
            $result[$value]++;
        }
    }
    return $result;
}