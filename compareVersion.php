<!-- Реализуйте функцию compareVersion, которая сравнивает переданные версии version1 и version2. Если version1 > version2, то функция должна вернуть 1, если version1 < version2, то - -1, если же version1 = version2, то - 0.

Версия - это строка, в которой два числа (мажорная и минорные версии) разделены точкой, например: 12.11. Важно понимать, что версия - это не число с плавающей точкой, а несколько чисел не связанных между собой. Проверка на больше/меньше производится сравнением каждого числа независимо. Поэтому версия 0.12 больше версии 0.2.

Пример порядка версий:

0.1 < 1.1 < 1.2 < 1.11 < 13.37

compareVersion("0.1", "0.2");
// → -1

compareVersion("0.2", "0.1");
// → 1

compareVersion("4.2", "4.2");
// → 0 -->

<?php

function compareVersion($version1, $version2)
{
    $version1Exploded = explode('.', $version1);
    $version2Exploded = explode('.', $version2);
    if ($version1Exploded > $version2Exploded) {
        return 1;
    } elseif ($version1Exploded < $version2Exploded) {
        return -1;
    } else {
        return 0;
    }
}