<!-- Реализуйте функцию lengthOfLastWord, которая возвращает 
длину последнего слова переданной на вход строки. 
Словом считается любая последовательность, не содержащая пробелов.

lengthOfLastWord(''); // 0

lengthOfLastWord('man in BlacK'); // 5

lengthOfLastWord('hello, world!  '); // 6 -->

<?php

function lengthOfLastWord($str)
{
    if (strlen($str) === 0) {
        return 0;
    }
    $exploded = explode(' ', $str);
    $wordArray = [];
    foreach ($exploded as $element) {
        if (!empty($element)) {
            $wordArray[] = $element;
        }
    }
    $lastElement = $wordArray[sizeof($wordArray) -1];
    return strlen($lastElement);
}