<!-- Реализуйте функцию isPowerOfThree которая определяет, является ли переданное 
число натуральной степенью тройки. Например число 27 это третья степень (33), 
а 81 это четвертая (34).

Пример:

isPowerOfThree(1); // → true (3^0)
isPowerOfThree(3); // → true
isPowerOfThree(4); // → false
isPowerOfThree(9); // → true -->

<?php

function isPowerOfThree($num)
{
    if ($num === 1) {
        return true;
    }
    for ($i = $num; $i >= 3; $i = $i / 3) {
        if ($i / 3 === 1) {
            return true;
        }
    }
    return false;
}