<!-- Реализуйте функцию, которая принимает на вход массив, 
состоящий из массивов-пар, и возвращает ассоциативный массив, полученный из этих пар.

fromPairs([['fred', 30], ['barney', 40]]);
// → ['fred' => 30, 'barney' => 40] -->

<?php

function fromPairs($array)
{
    $result = array_column($array, 1, 0);
    return $result;
}