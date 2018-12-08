<!-- Реализуйте map используя итеративный процесс -->

<?php

require_once 'Pair.php';

use function App\Pair\cons;
use function App\Pair\car;
use function App\Pair\cdr;
use function App\Pair\reverse;
use function App\Pair\listToString;

function map($func, $list)
{
    $map = function ($acc, $list) use ($func, &$map) {
        if ($list == null) {
            return reverse($acc);
        } else {
            return $map(cons($func(car($list)), $acc), cdr($list));
        }
    };
    return $map(null, $list);
}