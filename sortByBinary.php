<!-- Реализуйте функцию sortByBinary, которая сортирует переданную коллекцию 
и возвращает новую коллекцию. Сортировка происходит следующим образом:

Сортируем по количеству единиц в бинарном представлении (порядок следования не важен).
Если количество единиц одинаково, то сортируем на основе десятичного представления.
Пример:

[1, 2, 4, 3] == sortByBinary([3, 4, 2, 1]); -->

<?php

require getenv('COMPOSER_HOME') . '/vendor/autoload.php';

use function Functional\sort as fsort;

function sortByBinary($collection)
{
    $countOnes = function ($num) {
        $BinaryNum = (string)decbin($num);
        $result = 0;
        for ($i = 0; $i < strlen($BinaryNum); $i++) {
            if ($BinaryNum[$i] == 1) {
                $result += 1;
            }
        }
        return $result;
    };
    usort($collection, function ($left, $right) use ($countOnes) {
        if ($countOnes($left) > $countOnes($right)) {
            return 1;
        } elseif ($countOnes($left) == $countOnes($right)) {
            return $left > $right ? 1 : -1;
        } else {
            return -1;
        }
    });
    return $collection;
}