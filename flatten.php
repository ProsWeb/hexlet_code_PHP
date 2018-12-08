<!-- Реализуйте функцию flatten, которая делает плоским массив любой вложенности.

Пример:

flatten([]); // []
flatten([[1], ['key' => 'value', [4]]]); // [1, 'value', 4] -->

<?php

function flatten($array)
{
    $iter = function ($array, $acc) use (&$iter) {
        if (empty($array)) {
            return $acc;
        }

        $firstElement = array_shift($array);
        if (is_array($firstElement)) {
            return $iter($array, $iter($firstElement, $acc));
        } else {
            $acc[] = $firstElement;
            return $iter($array, $acc);
        }
    };
    return $iter($array, []);
}