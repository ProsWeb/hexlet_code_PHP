<!-- Реализуйте функцию wordsCount, которая принимает на вход массив слов и возвращает массив, 
в котором ключ это слово, а значение это количество раз, которое это слово встречалось в исходном массиве.

Пример:

['cat' => 1, 'dog' => 1, 'fish' => 2] == wordsCount(['cat', 'dog', 'fish', 'fish']) -->

<?php

require getenv('COMPOSER_HOME') . '/vendor/autoload.php';

use function Functional\reduce_left;

function wordsCount($array)
{
    return array_reduce($array, function ($acc, $item) {
        if (!array_key_exists($item, $acc)) {
            $acc[$item] = 1;
        } else {
            $acc[$item]++;
        }
        return $acc;
    }, []);
}