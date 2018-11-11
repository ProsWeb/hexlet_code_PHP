<!-- В данном упражнении необходимо реализовать стековую машину, 
то есть алгоритм, проводящий вычисления по обратной польской записи.

Обратная польская нотация или постфиксная нотация — 
форма записи математических и логических выражений, 
в которой операнды расположены перед знаками операций. 
Выражение читается слева направо. Когда в выражении встречается знак операции, 
выполняется соответствующая операция над двумя ближайшими операндами, 
находящимися слева от знака операции. 
Результат операции заменяет в выражении последовательность её операндов и знак, 
после чего выражение вычисляется дальше по тому же правилу. Таким образом, 
результатом вычисления всего выражения становится результат последней вычисленной операции.

Например, выражение (1 + 2) * 4 + 3 
в постфиксной нотации будет выглядеть так: 1 2 + 4 * 3 +, 
а результат вычисления: 15. Другой пример - выражение: 7 - 2 * 3, 
в постфиксной нотации: 7 2 3 * -, результат: 1.

src\Arrays.php
Реализуйте функцию calcInPolishNotation, которая принимает массив, 
каждый элемент которого содержит число или знак операции (+, -, *, /). 
Функция должна вернуть результат вычисления по обратной польской записи.
calcInPolishNotation([1, 2, '+', 4, '*', 3, '+']);
// → 15

calcInPolishNotation([7, 2, 3, '*', '-']);
// → 1 -->

<?php

function calcInPolishNotation($array)
{
    $stack = [];

    for ($i = 0; $i < sizeof($array); $i++) {
        $prevPrevElement = sizeof($stack) - 2;
        $prevElement = sizeof($stack) - 1;
        $curr = $array[$i];
        if (is_numeric($curr)) {
            array_push($stack, $curr);
        }
        switch ($curr) {
            case '+':
                $nextElement = $stack[$prevPrevElement] + $stack[$prevElement];
                array_splice($stack, $prevPrevElement, $prevElement);
                array_push($stack, $nextElement);
                break;
        
            case '-':
                $nextElement = $stack[$prevPrevElement] - $stack[$prevElement];
                array_splice($stack, $prevPrevElement, $prevElement);
                array_push($stack, $nextElement);
                break;
            
            case '*':
                $nextElement = $stack[$prevPrevElement] * $stack[$prevElement];
                array_splice($stack, $prevPrevElement, $prevElement);
                array_push($stack, $nextElement);
                break;
        }
    }
    return array_pop($stack);
}