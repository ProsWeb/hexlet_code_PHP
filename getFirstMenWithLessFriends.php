<!-- Реализуйте функцию getFirstMenWithLessFriends, 
которая принимает список пользователей и возвращает пользователя, 
у которого меньше всего друзей.

Примечания
Если список пользователей пустой, то возвращается null
Если в списке есть более одного пользователя с минимальным количеством друзей, 
то возвращается последний из таких пользователей
Примеры

$users = [
    ['name' => 'Tirion', 'friends' => [
        ['name' => 'Mira', 'gender' => 'female'],
        ['name' => 'Ramsey', 'gender' => 'male']
    ]],
    ['name' => 'Bronn', 'friends' => []],
    ['name' => 'Sam', 'friends' => [
        ['name' => 'Aria', 'gender' => 'female'],
        ['name' => 'Keit', 'gender' => 'female']
    ]],
    ['name' => 'Keit', 'friends' => []],
    ['name' => 'Rob', 'friends' => [
        ['name' => 'Taywin', 'gender' => 'male']
    ]],
];

getFirstMenWithLessFriends($users);
// => ['name' => 'Keit', 'friends' => []]; -->

<?php

use Funct\Collection;

function getFirstMenWithLessFriends($users)
{
    if (empty($users)) {
        return null;
    }
    return Collection\minValue($users, function ($user) {
        return count($user['friends']);
    });
}