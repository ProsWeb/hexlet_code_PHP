<!-- Реализуйте функцию longestLength принимающую на вход строку и возвращающую длину максимальной последовательности из неповторяющихся символов. Подстрока может состоять из одного символа. Например в строке qweqrty, можно выделить следующие подстроки: qwe, weqrty. Самой длинной будет weqrty.

Пример:

longestLength('abcdeef'); // → 5
longestLength('jabjcdel'); // → 7 -->

<?php

function longestLength($str)
{
    $strToArray = str_split($str);

    $iter = function ($strToArray, $i, $result, $newResult, $array) use (&$iter) {
        $arrElementCnt = count($strToArray);
        if ($newResult < $result) {
            $newResult = $result;
        }
        if ($i === $arrElementCnt) {
            return $newResult;
        } elseif (!in_array($strToArray[$i], $array)) {
            $array[] = $strToArray[$i];
            return $iter($strToArray, $i + 1, $result + 1, $newResult, $array);
        } else {
            return $iter(array_splice($strToArray, -($arrElementCnt - 1)), $i = 0, $result = 0, $newResult, $array = []);
        }
    };
    return $iter($strToArray, $i = 0, $result = 0, $newResult = 0, $array = []);
}