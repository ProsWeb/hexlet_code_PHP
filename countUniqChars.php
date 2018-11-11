<!-- Реализуйте функцию countUniqChars, которая считает количество уникальных 
символов в переданной строке. Если передана пустая строка, 
то функция должна вернуть 0, т.к. пустая строка вообще не содержит символов.

Задание необходимо выполнить без использования функции array_unique.


$text1 = 'yy';
countUniqChars($text1); // => 1

$text2 = 'yyab';
countUniqChars($text2); // => 3

$text3 = 'You know nothing Jon Snow';
countUniqChars($text3); // => 13

$text4 = '';
countUniqChars($text4); // => 0 -->

<?php

function countUniqChars($str)
{
    if ($str === '') {
        return 0;
    }

    $splitted = str_split($str);
    $uniq = [];
    foreach ($splitted as $char) {
        if (!in_array($char, $uniq)) {
            $uniq[] = $char;
        }
    }

    return count($uniq);
}

// function countUniqChars($str)
// {
//     if ($str === "") {
//         return 0;
//     }
//     if ($str === "0") {
//         return 1;
//     }
//     $splitted = str_split($str);
//     $countedValue = array_count_values($splitted);
    
//     $count = 0;

//     foreach ($countedValue as $key => $value) {
//         if ($value === 1 || $key === ' ') {
//             $count += 1;
//         }
//     }
//     return $count;
// }