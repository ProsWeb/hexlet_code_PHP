<!-- Реализуйте набор функций, для работы со словарем построенным на хеш-таблице. 
Для простоты, наша реализация не поддерживает разрешение коллизий.

make() - создает новый словарь
set($map, $key, $value) - устанавлвает в словарь значение по ключу. 
Работает и для создания и для изменения. 
Функция возвращает true если удалось установить значение и false в обратной ситуации. 
Такое возможно при возникновении коллизий.
get($map, $key, $default = null) - читает значение по ключу.
Функции set и get принимают первым параметром словарь и мутируют его, 
то есть передача идет по ссылке.

Для полноценного погружения в тему, считаем что массив 
в PHP может использоваться только как индексированный массив.

$map = Map\make();
$result = Map\get($map, 'key');
print_r($result); // => null

$result = Map\get($map, 'key', 'value');
print_r($result); // => value

Map\set($map, 'key2', 'value2');
$result = Map\get($map, 'key2');
print_r($result); // => value2
Подсказки
crc32 - хеш-функция
Берите остаток от деления на 1000 -->

<?php

// BEGIN (write your solution here)
function make()
{
    return [];
}

function set(&$map, $key, $value)
{
    $hashedKey = crc32($key) % 1000;
    if (isset($map[$hashedKey])) {
        [$currentKey] = $map[$hashedKey];
        if ($currentKey != $key) {
            return false;
        }
    }
    $map[$hashedKey] = [$key, $value];
    return true;
}

function get($map, $key, $default = null)
{
    $hashedKey = crc32($key) % 1000;
    if (!isset($map[$hashedKey])) {
        return $default;
    }
    [, $value] = $map[$hashedKey];
    return $value;
}
// END
