<!-- Реализуйте функцию reverse, которая принимает на вход сегмент 
и возвращает новый сегмент с точками, добавленными в обратном порядке (begin меняется местами со end).

Примечания
Точки в результирующем сегменте должны быть копиями (по значению) соответствующих точек исходного массива. 
То есть они не должны быть ссылкой на один и тот же объект, 
так как это разные объекты (пускай и с одинаковыми координатами).
Примеры
use function App\SegmentFunctions\reverse;

$segment = new \App\Segment(new Point(1, 10), new Point(11, -3));
$reversedSegment = reverse($segment);

$reversedSegment->beginPoint; // => (11, -3)
$reversedSegment->endPoint; // => (1, 10) -->

<?php

use App\Point;

function reverse($segment)
{
    $temp = clone $segment->beginPoint;
    $segment->beginPoint = clone $segment->endPoint;
    $segment->endPoint = clone $temp;
    return $segment;
}