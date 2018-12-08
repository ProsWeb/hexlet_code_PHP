<!-- Реализуйте функцию length, которая считает длину списка; -->

<?php

use function Pairs\cons;
use function Pairs\car;
use function Pairs\cdr;

function length($items)
{
    $iter = function ($items, $acc) use (&$iter) {
        if (is_null($items)) {
            return $acc;
        } else {
            return $iter(cdr($items), $acc + 1);
        }
    };
    return $iter($items, 0);
}