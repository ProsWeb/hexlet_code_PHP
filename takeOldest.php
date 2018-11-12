<!-- Реализуйте функцию takeOldest, которая принимает 
на вход список пользователей и возвращает самых взрослых. 
Количество возвращаемых пользователей задается вторым параметром, 
который по-умолчанию равен единице.

$users = [
    ['name' => 'Tirion', 'birthday' => '1988-11-19'],
    ['name' => 'Sam', 'birthday' => '1999-11-22'],
    ['name' => 'Rob', 'birthday' => '1975-01-11'],
    ['name' => 'Sansa', 'birthday' => '2001-03-20'],
    ['name' => 'Tisha', 'birthday' => '1992-02-27']
];

takeOldest($users);
# => Array (
#   ['name' => 'Rob', 'birthday' => '1975-01-11']
# ) -->

<?php

use function \Funct\Collection\firstN;

function takeOldest($data, $usersNum = 1)
{
    $cmp = function ($a, $b) {
        $aTime = strtotime($a['birthday']);
        $bTime = strtotime($b['birthday']);
        return $aTime >= $bTime ? 1 : -1;
    };
    usort($data, $cmp);
    return firstN($data, $usersNum);
}