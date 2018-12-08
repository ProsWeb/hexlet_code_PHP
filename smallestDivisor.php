<!-- Divisor.php
Реализуйте рекурсивную функцию smallestDivisor, используя линейно-итеративный процесс. 
Функция должна находить минимальный делитель переданного числа.

Минимальный делитель числа - это наименьшее число, на которое делится исходное без остатка. -->

<?php

function smallestDivisor($num)
{
    $iter = function ($div) use ($num, &$iter) {
        if ($num <= $div) {
            return $num;
        }
        if ($num % $div == 0) {
            return $div;
        } else {
            return $iter($div + 1);
        }
    };
    return $iter(2);
    
}