<!-- Реализуйте функцию isPrime определяющую, является ли число простым.

Пример:

isPrime(1); // → false
isPrime(7); // → true
isPrime(10); // → false -->

<?php

function isPrime($num)
{
    if ($num < 2) {
        return false;
    }
    for ($i = 2; $i < $num; $i++) {
        if ($num % $i === 0) {
            return false;
        }
    }
    return true;
}