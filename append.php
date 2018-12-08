<!-- Реализуйте функцию append, которая соединяет два списка; -->

<?php

use function Pairs\cons;
use function Pairs\car;
use function Pairs\cdr;

function append($list1, $list2)
{
    // BEGIN (write your solution here)
    if (is_null($list1)) {
        return $list2;
    } else {
        return cons(car($list1), append(cdr($list1), $list2));
    }
    // END
}