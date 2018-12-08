<!-- Класс Time предназначен для создания объекта-времени. 
Его конструктор принимает на вход количество часов и минут в виде двух отдельных параметров.
$time = new Time(10, 15);
print_r($time); // => 10:15
src\Time.php
Добавьте в класс Time статический метод fromString, 
который позволяет создавать инстансы Time на основе времени переданного строкой формата часы:минуты.

$time = Time::fromString('10:23');
$this->assertEquals('10:23', $time->toString()); -->

<?php

class Time
{
    private $h;
    private $m;
    public static function fromString($time)
    {
        return new self(date('G', strtotime($time)), (int)date('i', strtotime($time)));
    }

    public function __construct($h, $m)
    {
        $this->h = $h;
        $this->m = $m;
    }

    public function toString()
    {
        return "{$this->h}:{$this->m}";
    }
}