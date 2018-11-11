<!-- Реализуйте функцию getSameCount, которая считает количество общих уникальных элементов 
для двух массивов. Аргументы:

Первый массив
Второй массив

getSameCount([], []); // => 0
getSameCount([1, 10, 3], [10, 100, 35, 1]); // => 2
getSameCount([1, 3, 2, 2], [3, 1, 1, 2]); // => 3 -->

<?php

function getSameCount($first, $second)
{
    $sameElementCount = 0;
    $uniqueFirst = array_unique($first);
    $uniqueSecond = array_unique($second);
    for ($i = 0; $i < sizeof($uniqueFirst); $i++) {
        if (in_array($uniqueFirst[$i], $uniqueSecond, true)) {
            $sameElementCount += 1;
        }
    }
    return $sameElementCount;
}