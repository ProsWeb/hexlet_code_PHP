<!-- Измените функцию random из видео так, чтобы можно было обнулять сгенерированную последовательность.

Пример:

$seq = random(3);
$result = $seq(); // 22
$seq(); // 6
$seq(); // 23

$seq("reset");

$result == $seq(); // 22
  -->

<?php

function random($seed)
{
    $init = $seed;
    return function ($reset = null) use ($init, &$seed) {
        switch ($reset) {
            case null:
                $a = 45;
                $c = 21;
                $m = 67;

                $seed = ($a * $seed + $c) % $m;
                break;
            case "reset":
                $seed = $init;
                break;
        }
    };
}
// END