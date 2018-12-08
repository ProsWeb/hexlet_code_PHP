<!-- Реализуйте недостающие части класса Timer, который описывает собой таймер обратного отсчета. 
Необходимо дописать конструктор принимающий на вход три параметра: 
секунды, минуты (необязательный) и часы (необязательный). 
Конструктор должен подсчитать общее количество секунд для переданного времени 
и записать его в свойство secondsCount.

Воспользуйтесь константой SEC_PER_MIN для перевода минут в секунды (через умножение)
Реализуйте дополнительную константу SEC_PER_HOUR и воспользуйтесь ей для перевода часов в секунды
$timer = new Timer(10);
$this->assertEquals(10, $timer->getLeftSeconds()); -->

<?php

class Rational
{
    public $numer;
    public $denom;

    public function __construct($numer, $denom)
    {
        $this->numer = $numer;
        $this->denom = $denom;
    }

    public function getNumer()
    {
        return $this->numer;
    }

    public function getDenom()
    {
        return $this->denom;
    }

    public function add($num)
    {
        return new Rational(
            $this->getNumer() * $num->getDenom($num) + $num->getNumer($num) * $this->getDenom(),
            $this->getDenom() * $num->getDenom($num)
        );
    }

    public function sub($num)
    {
        return new Rational(
            $this->getNumer() * $num->getDenom($num) - $num->getNumer($num) * $this->getDenom(),
            $this->getDenom() * $num->getDenom($num)
        );
    }
}