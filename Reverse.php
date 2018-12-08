<!-- Реализуйте функцию reverse, которая переворачивает список; -->

<?php

use function Pairs\cons;
use function Pairs\car;
use function Pairs\cdr;

function reverse($list)
{
    $iter = function ($result, $list) use (&$iter) {
        if (is_null($list)) {
            return $result;
        } else {
            return $iter(cons(car($list), $result), cdr($list));
        }
    };
    return $iter(null, $list);
}