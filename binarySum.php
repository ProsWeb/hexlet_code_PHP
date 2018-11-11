<!-- Реализуйте функцию binarySum, которая принимает на вход два бинарных числа (в виде строк) и возвращает их сумму. Результат (вычисленная сумма) также должен быть бинарным числом в виде строки.

Посмотрите примеры работы функции:

'11' == binarySum('10', '1');
'10010' == binarySum('1101', '101'); -->

<?php

function binarySum($binNum1, $binNum2)
{
    $decNum1 = bindec($binNum1);
    $decNum2 = bindec($binNum2);

    return decbin($decNum1 + $decNum2);
}