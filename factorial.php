<!-- Factorial.php
Реализуйте рекурсивную функцию factorial, используя линейно-итеративный процесс.

factorial(3); // 6 -->

<?php

function factorial($num)
{
    $iter = function ($acc, $num) use (&$iter) {
        if ($num < 2) {
            return $acc;
        } else {
            return $iter($acc * $num, $num - 1);
        }
    };
    return $iter(1, $num);
}