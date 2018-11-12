<!-- Дано неотрицательное целое число num. Итеративно сложите все входящие в него цифры до тех пор, пока не останется одна цифра.

Для числа 38 процесс будет выглядеть так:

3 + 8 = 11
1 + 1 = 2
Результат: 2

src/App/Solution/Solution.php
Реализуйте функцию addDigits

Пример: 

addDigits(0); // 0
addDigits(1); // 1
addDigits(9); // 9
addDigits(10); // 1
addDigits(38); // 2 -->

<?php

function addDigits($num)
{
    $result = $num;
    while ($result >= 10) {
        $result = array_sum(str_split($result));
    }

    return $result;
}
/* function addDigits($num)
{
    return ($num - 1) % 9 + 1;
}


function addDigits($num)
{
    $numString = (string)$num;
    $numStringLen = strlen($numString);

    function iter($numStringLen, $sum, $acc, $numString)
    {
        if ($numStringLen === 0 && $sum <= 9) {
            return $sum;
        } elseif ($numStringLen === 0 && $sum > 9) {
            $sumString = (string)$sum;
            return $sumString[0] + $sumString[1];
        } else {
            return iter($numStringLen - 1, $sum + $numString[$acc], $acc + 1, $numString);
        }
    }
    return iter($numStringLen, $sum = 0, $acc = 0, $numString);
}
*/