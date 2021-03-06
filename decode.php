<!-- NRZI код (Non Return to Zero Invertive) — 
один из способов линейного кодирования. 
Код формируется путем инверсного состояния при поступлении 
на вход кодирующего устройства логической единицы, 
при поступлении логического нуля состояние потенциала не меняется.

Реализуйте функцию decode принимающую 
в качестве параметра строку в виде линейного сигнала и возвращающую строку с бинарным кодом.

Пример использования:

$signal = '_|¯|____|¯|__|¯¯¯';
decode($signal); // => '011000110100'

$signal_2 = '|¯|___|¯¯¯¯¯|___|¯|_|¯';
decode($signal_2); // => '110010000100111'

$signal_3 = '¯|___|¯¯¯¯¯|___|¯|_|¯';
decode($signal_3); // => '010010000100111' -->

<?php

function decode($str)
{
    if (strlen($str) < 2) {
        return '';
    }
    $array = preg_split("//u", $str, -1, PREG_SPLIT_NO_EMPTY);

    $result = [];
    for ($i = 0; $i < sizeof($array); $i++) {
        if ($array[$i] == '|') {
            $result[] = 1;
            $i++;
        } else {
            $result[] = 0;
        }
    }
    return implode($result);
}