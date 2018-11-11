<!-- Реализуйте функцию reverse, которая переворачивает строку.

Пример:

reverse('hello, world!'); // !dlrow ,olleh -->

<?php

function reverse($str)
{
    $result = '';
    $i = 1;
    while ($i <= strlen($str)) {
        $result = "{$result}{$str[strlen($str) - $i]}";
        $i += 1;
    }
    return $result;
}