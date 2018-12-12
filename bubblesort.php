<!-- Реализуйте функцию bubbleSort, которая сортирует массив используя пузырьковую сортировку. 
Постарайтесь не подглядывать в текст теории и попробуйте воспроизвести алгоритм по памяти.

use function App\Arrays\bubbleSort;

bubbleSort([]); // => []
bubbleSort([3, 10, 4, 3]); // => [3, 3, 4, 10] -->

<?php

function bubbleSort($array)
{
    if (empty($array)) {
        return $array;
    }
    do {
        $swapped = false;
        for ($i = 0; $i < (sizeof($array) - 1); $i++) {
            if ($array[$i] > $array[$i + 1]) {
                // $temp = $array[$i];
                // $array[$i] = $array[$i + 1];
                // $array[$i + 1] = $temp;
                [$array[$i], $array[$i + 1]] = [$array[$i + 1], $array[$i]]; // destructuring
                $swapped = true;
            }
        }
    } while ($swapped);

    return $array;
}