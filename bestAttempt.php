<!-- Один из способов определения победителя в футболе это пенальти. Процесс идет так: 
В каждой попытке бьет игрок каждой из команд и определяется команда победитель этой попытки. 
Процесс продолжается до 5 попыток, хотя победитель может быть выявлен и раньше. 
Если после пяти попыток победитель не выявлен, то процесс продолжается до первой выигранной попытки.

Solution.php
Реализуйте функцию bestAttempt которая принимает на вход результаты попыток 
и возвращает массив со списком имен футбольных клубов, которые победили в каждой из попыток. 
Если результатом попытки была ничья, то в результирующем массиве она не фигурирует 
(потому что никто не победил).

Пример:

$firstClubAttempts = [['name' => 'milan', 'scored' => 1], ['name' => 'milan', 'scored' => 0]];
$secondClubAttempts = [['name' => 'porto', 'scored' => 1], ['name' => 'porto', 'scored' => 1]];

['porto'] == bestAttempt($firstClubAttempts, $secondClubAttempts);
Подсказки:

array_map сохраняет ключи. Чтобы их сбросить, используйте array_values -->

<?php

require getenv('COMPOSER_HOME') . '/vendor/autoload.php';

use function Functional\map;
use function Functional\zip;

function bestAttempt($first, $second)
{
    $mapped = array_map(function ($a, $b) {
        if ($a['scored'] > $b['scored']) {
            return $a['name'];
        } elseif ($a['scored'] < $b['scored']) {
            return $b['name'];
        } elseif ($a['scored'] = $b['scored']) {
            return null;
        }
    }, $first, $second);
    $filtered = array_filter($mapped, function ($item) {
        return !is_null($item);
    });
    return array_values($filtered);
}