<!-- Реализуйте недостающие части класса Timer, который описывает собой таймер обратного отсчета. 
Необходимо дописать конструктор принимающий на вход три параметра: секунды, минуты (необязательный) 
и часы (необязательный). 
Конструктор должен подсчитать общее количество секунд для переданного времени 
и записать его в свойство secondsCount.

Воспользуйтесь константой SEC_PER_MIN для перевода минут в секунды (через умножение)
Реализуйте дополнительную константу SEC_PER_HOUR и воспользуйтесь ей для перевода часов в секунды

$timer = new Timer(10);
$this->assertEquals(10, $timer->getLeftSeconds()); -->

<?php

class Timer
{
    const SEC_PER_MIN = 60;

    const SEC_PER_HOUR = 3600;

    public function __construct($sec, $min = 0, $hour = 0)
    {
        $this->secondsCount = $sec + self::SEC_PER_MIN * $min + self::SEC_PER_HOUR * $hour;
    }

    public function getLeftSeconds()
    {
        return $this->secondsCount;
    }

    public function tick()
    {
        $this->secondsCount--;
    }
}