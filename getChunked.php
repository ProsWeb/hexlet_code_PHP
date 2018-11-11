<!-- Чанкованием (от англ. Chunk — ячейка, кусок, осколок) 
в программировании называют разбиение коллекции (массива) 
на несколько более мелких коллекций. Например, разобьём массив на чанки, 
так чтобы в каждом чанке было не более двух элементов: 
['a', 'b', 'c', 'd'] -> [['a', 'b'], ['c', 'd']].

src\Arrays.php
Реализуйте функцию getChunked, которая принимает на вход массив и число, 
задающее размер чанка (куска). Функция должна вернуть массив, 
состоящий из чанков указанной размерности.

getChunked(['a', 'b', 'c', 'd'], 2);
// → [['a', 'b'], ['c', 'd']]

getChunked(['a', 'b', 'c', 'd'], 3);
// → [['a', 'b', 'c'], ['d']] -->

<?php

function getChunked($array, $chunkSize)
{
    $chunked = [];
    for ($i = 0; $i < sizeof($array); $i += $chunkSize) {
        $chunked[] = array_slice($array, $i, $chunkSize);
    }
    return $chunked;
}