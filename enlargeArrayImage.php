<!-- Реализуйте функцию enlargeArrayImage, 
которая принимает изображение в виде двумерного массива и увеличивает его в два раза.


$arr = [
    ['*','*','*','*'],
    ['*',' ',' ','*'],
    ['*',' ',' ','*'],
    ['*','*','*','*']
];
// ****
// *  *
// *  *
// ****

enlargeArrayImage($arr);
// ********
// ********
// **    **
// **    **
// **    **
// **    **
// ********
// ******** -->

<?php

function enlargeArrayImage($arr)
{
    $result = [];

    foreach ($arr as $child) {
        $childArray = [];
        foreach ($child as $symbol) {
            $childArray[] = $symbol;
            $childArray[] = $symbol;
        }
        $result[] = $childArray;
        $result[] = $childArray;
    }

    return $result;
}