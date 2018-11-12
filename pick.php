<!-- Реализуйте функцию pick, которая извлекает из переданного массива 
все элементы по указанным ключам и возвращает новый массив. Аргументы:

Исходный массив
Массив ключей, по которым должны быть выбраны элементы (ключ и значение) 
из исходного массива, и на основе выбранных данных сформирован новый массив


$data = [
    'user' => 'ubuntu',
    'cores' => 4,
    'os' => 'linux'
];

pick($data, ['user']);       // → ['user' => 'ubuntu']
pick($data, ['user', 'os']); // → ['user' => 'ubuntu', 'os' => 'linux']
pick($data, []);             // → []
pick($data, ['none']);       // → [] -->

<?php

function pick($array, $keysToFind)
{
    $result = [];
    foreach ($keysToFind as $key => $value) {
        if (array_key_exists($value, $array)) {
            $result[$value] = $array[$value];
        }
    }
    return $result;
}