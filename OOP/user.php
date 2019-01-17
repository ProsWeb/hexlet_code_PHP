<!-- Реализуйте класс User, который создает пользователей. 
Конструктор класса принимает на вход два параметра: идентификатор и имя.

Реализуйте интерфейс Comparable для класса User. 
Сравнение пользователей происходит на основе их идентификатора.

$user1 = new User(4, 'tolya');
$user2 = new User(1, 'petya');

$user1->compareTo($user2); // false -->

<?php

// BEGIN (write your solution here)
use App\Comparable;

class User
{
    public $id;
    public $name;

    public function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    public function getId()
    {
        return $this->id;
    }

    public function compareTo($user)
    {
        return $this->id === $user->getId();
    }
}
// END