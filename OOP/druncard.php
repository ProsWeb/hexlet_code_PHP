<!-- Пьяница — карточная игра, в которой побеждает тот игрок, который собирает все карты. 
В нашей задаче используется модификация игры с двумя игроками. 
Игрокам раздаётся равное количество карт. 
Игроки не смотрят в свои карты, а кладут их в стопку рядом с собой. 
Затем каждый игрок снимает верхнюю карту и показывает её сопернику. 
Тот игрок, чья карта оказалась большего номинала, 
берёт обе карты и кладёт их к себе в колоду снизу (так что своя карта идёт первой). 
Если карты имеют одинаковый номинал, то они выкидываются из игры. 
В игре возможны три исхода:

У обоих игроков не осталось карт
Игра не может закончиться
Победил один из игроков
src\Drunkard.php
Реализуйте класс Drunkard с функцией run, которая принимает на вход два списка чисел, 
которые представляют собой карты для первого и второго игроков.

Если выиграл первый игрок, то метод должен вернуть First player. Round: <номер раунда>.
Если выиграл второй игрок, то метод должен вернуть Second player. Round: <номер раунда>.
Если у игроков не осталось карт, то метод должен вернуть Botva!
Если за 100 раундов не удалось выявить победителя то также возвращается Botva!
Реальные примеры смотрите в тестах.

Подсказки
Воспользуйтесь классом \Ds\Deque для работы с колодами -->

<?php

use Ds\Deque;

// BEGIN (write your solution here)
class Drunkard
{
    public function run($firstDeck, $secondDeck)
    {
        $deck1 = new \Ds\Deque($firstDeck);
        $deck2 = new \Ds\Deque($secondDeck);

        for ($i = 0; $i <= 100; $i++) {
            if ($deck1->isEmpty() && $deck2->isEmpty()) {
                return 'Botva!';
            } elseif ($deck1->isEmpty()) {
                return "Second player. Round: {$i}";
            } elseif ($deck2->isEmpty()) {
                return "First player. Round: {$i}";
            }
            
            $deck1LastElement = $deck1->pop();
            $deck2LastElement = $deck2->pop();
                
            if ($deck1LastElement > $deck2LastElement) {
                $deck1->unshift($deck1LastElement, $deck2LastElement);
            } elseif ($deck1LastElement < $deck2LastElement) {
                $deck2->unshift($deck2LastElement, $deck1LastElement);
            }
        }
    }
}
// END