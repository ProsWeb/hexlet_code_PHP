<!-- Вес Хэмминга это количество единиц в двоичном представлении числа.

src/Solution.php
Реализуйте функцию hammingWeight, которая считает вес Хамминга.

hammingWeight(0);
// → 0

hammingWeight(4);
// → 1

hammingWeight(101);
// → 4 -->

<?php

function hammingWeight($num)
{
    $binaryNums = (string) decbin($num);
    $amount = 0;
    for ($i = 0; $i < strlen($binaryNums); $i++) {
        if ($binaryNums[$i] === '1') {
            $amount += 1;
        }
    }
    return $amount;
}

// function hammingWeight($num)
// {
//     $weight = 0;
//     $digits = str_split(decbin($num));
//     foreach ($digits as $value) {
//         if ($value == '1') {
//             $weight++;
//         }
//     }
//     return $weight;
// }