<!-- Напишите функцию newWithdraw, которая снимает деньги со счета. При попытке снять больше денег, 
чем есть на счете, она должна возвращать too much.

Пример:

$withdraw = newWithdraw(100);
$withdraw(1000); // 'too much'
$withdraw(50); // 50
$withdraw(45); // 5 -->

<?php

function newWithdraw($num)
{
    return function ($withdraw) use (&$num) {
        return $withdraw > $num ? "too much" : $num -= $withdraw;
    };
}