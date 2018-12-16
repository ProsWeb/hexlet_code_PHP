<!-- Реализуйте класс SquaresGenerator со статическим методом generate, 
принимающим два параметра: сторону и количество экземпляров квадрата, которые нужно создать. 
Функция должна вернуть массив из квадратов.

$squares = SquaresGenerator::generate(3, 2);
// [new Square(3), new Square(3)]; -->

<?php

class SquaresGenerator
{
    private $side;
    private $amount;

    public function __construct($side)
    {
        $this->side = $side;
    }

    public static function generate($side, $amount)
    {
        $filled = array_fill(0, $amount, new Square($side));
        return $filled;

        // $result = [];
        // for ($i = 0; $i < $number; $i++) {
        //     $result[] = new Square($side);
        // }
        // return $result;
    }
}