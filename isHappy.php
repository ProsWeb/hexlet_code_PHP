<!-- Счастливым билетом называют такой билет с шестизначным номером, 
где сумма первых трех цифр равна сумме последних трех.

Например, билет с номером 385916 - счастливый, так как 3 + 8 + 5 = 9 + 1 + 6

src/Ticket.php
Реализуйте функцию isHappy, проверяющую является ли номер счастливым (номер всегда строка). 
Функция должна возвращать true, если билет счастливый, или false, если нет. 
Номера могут быть произвольной длины, с единственным условием что количество цифр всегда четно, 
например, 33 или 2341 и так далее.

Примеры использования:

isHappy('385916'); // true
isHappy('231002'); // false
isHappy('1222'); // false
isHappy('054702'); // true
isHappy('00'); // true -->

<?php

function isHappy($num)
{
    $numToString = (string)$num;
    $leftHalfResult = 0;
    $rightHalfResult = 0;
    $numLength = strlen($numToString);
    for ($i = 0; $i < $numLength / 2; $i++) {
        $leftHalfResult += (int)$numToString[$i];
    }
    for ($i = $numLength / 2; $i < $numLength; $i++) {
        $rightHalfResult += (int)$numToString[$i];
    }

    return $leftHalfResult === $rightHalfResult;
}