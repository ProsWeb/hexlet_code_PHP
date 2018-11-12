<!-- Реализуйте функцию reverse, которая переворачивает цифры в переданном числе:


use function Number\reverse;

reverse(13); // 31
reverse(-123); // -321
Не забудьте задать тип входного и выходного аргумента. -->

<?php

function reverseInt($num)
{
    $numToString = strval($num);
    $result = '';
    for ($i = 0; $i < strlen($numToString); $i++) {
        $result = "{$numToString[$i]}{$result}";
    }
    return $num > 0 ? (int)$result : -(int)$result;
}

// function reverse(int $number): int
// {
//     $numToString = (string) abs($number);
//     $charsCount = strlen($numToString) - 1;
//     $result = '';
//     for ($i = 0; $i <= $charsCount; $i++) {
//         $result = "{$result}{$numToString[$charsCount - $i]}";
//     }
//     return $number > 0 ? (int)$result : -(int)$result;
// }