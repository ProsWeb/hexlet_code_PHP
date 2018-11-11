<!-- Реализуйте функцию makeCensored, которая заменяет каждое вхождение указанных слов в 
предложении на последовательность $#%! и возвращает полученную строку. Аргументы:

Текст
Набор стоп слов
Словом считается любая непрерывная последовательность символов, 
включая любые спецсимволы (без пробелов).


use function App\Strings\makeCensored;

$sentence = 'When you play the game of thrones, you win or you die';
makeCensored($sentence, ['die', 'play']);
// => When you $#%! the game of thrones, you win or you $#%!

$sentence2 = 'chicken chicken? chicken! chicken';
makeCensored($sentence2, ['?', 'chicken']);
// => '$#%! chicken$#%! chicken! $#%!';
Подсказки
Тернарная операция может сослужить вам хорошую службу в этой практике. -->

<?php

function makeCensored($text, $stop)
{
    $words = explode(' ', $text);
    $result = [];
    for ($i = 0; $i < sizeof($words); $i++) {
        if (in_array($words[$i], $stop)) {
            $result[] = "$#%!";
        } else {
            $result[] = "$words[$i]";
        }
    }
    return implode(' ', $result);
}