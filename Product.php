<!-- Реализуйте функцию product, которая сворачивает последовательность с помощью переданной функции. 
Последовательность задается первыми двумя аргументами. Первый это начало последовательности, 
второй это окончание. Например, последовательность [1, 4] это 1, 2, 3, 4. 
Свертка это сведение последовательности к какому-то значению. 
Само значение зависит от того, какая операция применяется при свертке. 
Обратите внимание, что последовательность, типа [$x, $x], состоит из одного числа $x и 
свертке не подлежит, функция в этом случае должна вернуть само число $x.

'С помощью переданной функции' означает то, что мы применяем эту функцию к элементам последовательности 
и используем ее результат, как аккумулятор (накопитель результата).

Примеры:

// f(1, 2) => 1 + 2
3 == product(1, 2, function ($first, $second) { return $first + $second; }) // sum

// f(f(3, 4), 5) => f(-1, 5) => -1 - 5
-6 == product(3, 5, function ($first, $second) { return $first - $second; }) // minus
По последнему примеру видно, что операция является левоассоциативной. 
Рассмотрим данное свойство подробнее на последовательности [1, 4]:

Последовательность: 1, 2, 3, 4. Операция: f - внутренности не важны, главное, что это некая функция.

Разложим операцию с учетом ее левоассоциативности:

f($left1, $right1); // $right1 = 4
f(f($left2, $right2), $right1); // $right2 = 3
f(f(f($left3, $right3), $right2), $right1); // $right3 = 2

// f = function ($first, $second) { return $first - $second; };
f(f(f(1, 2), 3), 4);
f(f(-1, 3), 4);
f(-4, 4); // -8 -->

<?php

function product($num1, $num2, $func)
{
    if ($num1 == $num2) {
        return $num1;
    }
    $iter = function ($num1, $acc) use ($num2, $func, &$iter) {
        if ($num1 == $num2) {
            return $acc;
        } else {
            return $iter($num1 + 1, $acc = $func($acc, $num1 + 1));
        }
    };
    return $iter($num1, $acc = $num1);
}