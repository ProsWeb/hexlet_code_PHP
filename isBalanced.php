<!-- Реализуйте функцию isBalanced, которая принимает на вход строку, 
состоящую только из открывающих и закрывающих круглых скобок, и проверяет 
является ли эта строка корректной. Пустая строка (отсутствие скобок) считается корректной.

Строка считается корректной (сбалансированной), 
если содержащаяся в ней скобочная структура соответствует требованиям:

Скобки — это парные структуры. У каждой открывающей скобки должна быть соответствующая 
ей закрывающая скобка.
Закрывающая скобка не должна идти впереди открывающей. 
Такой вариант недопустим )(, а вот такой допустим ()().


isBalanced('(())');  // true
isBalanced('((())'); // false -->

<?php

function isBalanced($str)
{
    if (empty($str)) {
        return true;
    }
    $openBracketsCount = 0;
    $closeBracketsCount = 0;
    for ($i = 0; $i < strlen($str); $i++) {
        if ($str[$i] === '(') {
            $openBracketsCount += 1;
        }
        if ($str[$i] === ')') {
            $closeBracketsCount += 1;
        }
        if ($openBracketsCount < $closeBracketsCount) {
            return false;
        }
    }
    return $openBracketsCount === $closeBracketsCount;
}