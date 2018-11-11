<?php

function reverseInt($num)
{
    $numToString = strval($num);
    $result = '';
    for ($i = 0; $i < strlen($numToString); $i++) {
        $result = "{$numToString[$i]}{$result}";
    }
    return $num > 0 ? (int)$result : -(int)$result;
}