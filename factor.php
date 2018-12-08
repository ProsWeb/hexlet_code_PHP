<!-- Реализуйте функцию factor, которая принимает на вход число (множитель) и возвращает функцию. 
Получившаяся функция принимает на вход один аргумент и возвращает результат умножения этого аргумента 
на множитель.

Пример:

$multiTwo = factor(2); // 2 - множитель

4 == $multiTwo(2); // 2 * 2
20 == $multiTwo(10); // 10 * 2 -->
<?php

function factor($multiplier)
{
    return function($num) use ($multiplier) {
        return $num * $multiplier;
    };
}