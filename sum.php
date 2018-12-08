<!-- Реализуйте функцию sum из видео, используя итеративный процесс. -->

<?php

function sum($start, $finish, $func)
{
    if ($start == $finish) {
        return $start;
    }
    $iter = function($start, $acc) use ($finish, $func, &$iter) {
        if ($start > $finish) {
        return $acc;
        } else {
            return $iter($start + 1, $acc + $func($start));
        }
    };
    return $iter($start, 0);
}