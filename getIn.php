<!-- Обращение к вложенным массивам выглядит просто, 
только когда мы уверены в наличии всех ключей, попадающихся по пути:


$data = [
    'a' => [
        'b' => [
            'c' => 'wow'
        ]
    ]
];

$data['a']['b']['c']; // => wow
Если же наличие данных ключей в массиве не обязательно, тогда код резко усложняется. 
Каждая попытка обратиться внутрь должна сопровождаться проверкой:

if (array_key_exists('a', $data)) {
    $inner1 = $data['a'];
    if (array_key_exists('b', $inner1)) {
        $inner2 = $inner1['b'];
        if (array_key_exists('c', $inner2)) {
            // ...
        }
    }
}
src\Arrays.php
Реализуйте функцию getIn, которая извлекает из массива 
(который может быть любой глубины вложенности) значение по указанным ключам. Аргументы:

Исходный массив
Массив ключей, по которым ведется поиск значения
В случае, когда добраться до значения невозможно, возвращается null.


$data = [
    'user' => 'ubuntu',
    'hosts' => [
        ['name' => 'web1'],
        ['name' => 'web2']
    ]
];

getIn($data, ['undefined']);        // => null
getIn($data, ['user']);             // => 'ubuntu'
getIn($data, ['user', 'ubuntu']);   // => null
getIn($data, ['hosts', 1, 'name']); // => 'web2'
getIn($data, ['hosts', 0]);         // => ['name' => 'web1'] -->

<?php

function getIn($array, $keytoFind)
{
    $current = $array;
    foreach ($keytoFind as $value) {
        if (!is_array($current) || !array_key_exists($value, $current)) {
            return null;
        }
        if (array_key_exists($value, $current)) {
            $current = $current[$value];
        }
    }
    return $current;
}