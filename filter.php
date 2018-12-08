<!-- Реализуйте функцию filter, используя итеративный процесс. -->

<?php

require 'Pair.php';

use function App\Pair\cons;
use function App\Pair\car;
use function App\Pair\cdr;
use function App\Pair\reverse;
use function App\Pair\listToString;

function filter($func, $list)
{
    // BEGIN (write your solution here)
    $filter = function ($acc, $list) use ($func, &$filter) {
        if ($list == null) {
            return reverse($acc);
        } elseif ($func(car($list))) {
            return $filter(cons(car($list), $acc), cdr($list));
        } else {
            return $filter($acc, cdr($list));
        }
    };
    return $filter(null, $list);
    // END
}