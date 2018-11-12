<!-- Реализуйте функцию average, которая возвращает среднее арифметическое всех переданных аргументов. Если функции не передать ни одного аргумента, то она должна вернуть null.

average(0); // => 0
average(0, 10); // => 5
average(-3, 4, 2, 10); // => 3.25
average(); // => null -->

<?php

function average(...$numbers)
{
    return empty($numbers) ? null : (array_sum($numbers)) / (sizeof($numbers));
}