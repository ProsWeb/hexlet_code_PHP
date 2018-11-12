<!-- Иногда в программировании возникает задача поиска разницы между двумя наборами данных, 
такими как ассоциативные массивы. Например, при поиске различий в json файлах. 
Для этого даже существуют специальные сервисы, например, http://www.jsondiff.com/ 
(попробуйте нажать на ссылку sample data и затем кнопку Compare).

Реализуйте функцию genDiff, которая возвращает ассоциативный массив, 
в котором каждому ключу из исходных массивов соответствует одно из четырех значений: 
added, deleted, changed или unchanged. Аргументы:

Ассоциативный массив
Ассоциативный массив
Расшифровка:

Added - ключ отсутствовал в первом массиве, но был добавлен во второй
Deleted - ключ был в первом массиве, но отсутствует во втором
Changed - ключ присутствовал и в первом и во втором массиве, но значения отличаются
Unchanged - ключ присутствовал и в первом и во втором массиве с одинаковыми значениями

use function App\Arrays\genDiff;

$result = genDiff(
    ['one' => 'eon', 'two' => 'two', 'four' => true],
    ['two' => 'own', 'zero' => 4, 'four' => true]
);
// => [
//     'one' => 'deleted',
//     'two' => 'changed'
//     'zero' => 'added',
//     'four' => 'unchanged',
// ]; -->

<?php

function union(array $data1, array $data2)
{
    return array_unique(array_merge($data1, $data2));
}

function genDiff($data1, $data2)
{
    $result = [];

    $sortedData1 = $data1;
    $sortedData2 = $data2;
    ksort($sortedData1);
    ksort($sortedData2);

    foreach ($sortedData1 as $key1 => $value1) {
        foreach ($sortedData2 as $key2 => $value2) {
            if ($key1 === $key2 && $value1 === $value2) {
                $result[$key1] = 'unchanged';
            }
            if ($key1 === $key2 && $value1 !== $value2) {
                $result[$key1] = 'changed';
            }
            if (!array_key_exists($key1, $sortedData2)) {
                $result[$key1] = 'deleted';
            }
            if (!array_key_exists($key2, $sortedData1)) {
                $result[$key2] = 'added';
            }
        }
    }
    return $result;
}