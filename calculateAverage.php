<!-- Реализуйте функцию calculateAverage, которая высчитывает среднее арифметическое элементов массива. Благодаря этой функции мы наконец-то посчитаем среднюю температуру по больнице :)


$temperatures = [37.5, 34, 39.3, 40, 38.7, 41.5];

calculateAverage($temperatures); // => 38.5
В случае пустого массива функция должна вернуть значение null (используйте в коде для этого guard expression):


$temperatures = [];

calculateAverage($temperatures); // => null -->

<?php

function calculateAverage($array)
{
    if (empty($array)) {
        return null;
    }
    $average = 0;
    foreach ($array as $element) {
        $average += $element;
    }
    return ($average / sizeof($array));
}