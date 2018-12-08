<!-- Реализуйте функцию deepReverse, которая принимает список в качестве аргумента и возвращает 
в качестве значения список, где порядок элементов обратный и подсписки также обращены.

Пример:

l(l(1, 2), l(3, 4)) == deepReverse(l(l(4, 3), l(2, 1))); -->

<?php

require getenv('COMPOSER_HOME') . '/vendor/autoload.php';

use function Lists\map;
use function Lists\reverse;
use function Pairs\isPair;

function deepReverse($list)
{
    $mapped = map(function ($item) {
        if (isPair($item)) {
            return deepReverse($item);
        } else {
            return $item;
        }
    }, $list);
    return reverse($mapped);
}