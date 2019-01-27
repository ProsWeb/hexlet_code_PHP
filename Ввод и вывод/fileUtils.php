<!-- Реализуйте функцию cd, принимающую на вход два параметра: 
текущую директорию и путь для перехода. 
Функция должна вернуть директорию, в которую необходимо перейти.

Пример использования:

cd('/current/path', '/etc'); // /etc
cd('/current/path', '.././anotherpath'); // /current/anotherpath
Правила перехода
Если путь для перехода начинается с /, то он же и является конечным путем (так как абсолютный путь).
.. - на уровень выше
. - та же директория -->

<?php

function cd($current, $move)
{
    // BEGIN (write your solution here)
    if ($move[0] == DIRECTORY_SEPARATOR) {
        return $move;
    }
    $currentStack = explode(DIRECTORY_SEPARATOR, $current);
    $moveStack = explode(DIRECTORY_SEPARATOR, $move);
    foreach ($moveStack as $value) {
        switch ($value) {
            case "..":
                array_pop($currentStack);
                break;
            case "":
            case '.':
                break;
            default:
                array_push($currentStack, $value);
                break;
        }
    }
    return implode(DIRECTORY_SEPARATOR, $currentStack);
    // END
}