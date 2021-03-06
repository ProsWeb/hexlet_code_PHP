<!-- Реализуйте функцию fib находящую положительные числа Фибоначчи. 
Аргументом функции является порядковый номер числа.

Формула:

f(0) = 0
f(1) = 1
f(n) = f(n-1) + f(n-2)
Пример:

2 == fib(3)
5 == fib(5)
55 == fib(10) -->

<?php

function fib($num)
{
    if ($num < 2) {
        return $num;
    } else {
        return fib($num - 1) + fib($num - 2);
    }
}

function fib2($num)
{
    $iter = function ($num) use (&$iter) {
        if ($num < 2) {
            return $num;
        } else {
            return $iter($num - 1) + $iter($num - 2);
        }
    };
    return $iter($num);
}