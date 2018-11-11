<!-- Реализуйте функцию isContinuousSequence, которая проверяет, 
является ли переданная последовательность целых чисел - 
возрастающей непрерывно (не имеющей пропусков чисел). Например, 
последовательность [4, 5, 6, 7] - непрерывная, а [0, 1, 3] - нет. 
Последовательность может начинаться с любого числа, главное условие - 
отсутствие пропусков чисел.

isContinuousSequence([10, 11, 12, 13]);     // => true
isContinuousSequence([10, 11, 12, 14, 15]); // => false
isContinuousSequence([1, 2, 2, 3]);         // => false
isContinuousSequence([]);                   // => false -->

<?php

function isContinuousSequence($array)
{
    if (empty($array)) {
        return false;
    }
    
    for ($i = 1; $i < sizeof($array) - 2; $i++) {
        if ($array[$i] - $array[$i - 1] !== 1 || $array[$i] - $array[$i + 1] !== -1) {
            return false;
        }
    }
    return true;
}
// END