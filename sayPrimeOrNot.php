<!-- Реализуйте функцию sayPrimeOrNot, которая проверяет 
переданное число на простоту и печатает на экран yes или no.

sayPrimeOrNot(5); // => yes
sayPrimeOrNot(4); // => no -->

<?php

function countResult($num)
{
    if ($num < 2) {
        return false;
    }
    for ($i = 2; $i < $num; $i++) {
        if ($num % $i === 0) {
            return false;
        }
    } return true;
}

function sayPrimeOrNot($num)
{
    return (countResult($num)) ? print_r('yes') : print_r('no');
}