<!-- Реализуйте функцию reverse, которая переворачивает переданный на вход список рекурсивно. -->

<?php

require 'Pair.php';

use function App\Pair\car;
use function App\Pair\isPair;
use function App\Pair\cdr;
use function App\Pair\cons;
use function App\Pair\listToString;

function reverse($list)
{
    $iter = function ($list, $acc) use (&$iter) {
        if ($list == null) {
            return $acc;
        }
        $element = car($list);
        if (isPair($element)) {
            return $iter(cdr($list), cons(reverse($element), $acc));
        } else {
            return $iter(cdr($list), cons($element, $acc));
        }
    };
    return $iter($list, null);
}