<!-- Реализуйте функцию subRat, которая производит вычитание рациональных чисел. 
При этом (с точки зрения внутренней реализации) функция возвращает 
в качестве результата новую пару (т.е. исходные пары, 
являющиеся параметрами функции, не изменяются).
Реализуйте функцию equalRat, которая делает проверку двух рациональных чисел на равенство. -->

<?php

use function Pairs\cons;
use function Pairs\car;
use function Pairs\cdr;

function makeRat($numer, $denom)
{
    return cons($numer, $denom);
}

function numer($rat)
{
    return car($rat);
}

function denom($rat)
{
    return cdr($rat);
}

function subRat($rat1, $rat2)
{
    return makeRat(numer($rat1) * denom($rat2) - numer($rat2) * denom($rat1), denom($rat1) * denom($rat2));
}
function equalRat($rat1, $rat2)
{
    return numer($rat1) * denom($rat2) == numer($rat2) * denom($rat1);
}