<!-- Реализуйте функцию buildDefinitionList, 
которая генерирует html список определений (теги dl, dt и dd) и 
возвращает получившуюся строку.

Параметры функции:

Список определений следующего формата:

$definitions = [
  ['definition1', 'description1'],
  ['definition2', 'description2']
];
То есть каждый элемент входного списка сам является массивом, 
содержащим два элемента: термин и его определение.

Пример:

$definitions = [
    ['Блямба', 'Выпуклость, утолщения на поверхности чего-либо'],
    ['Бобр', 'Животное из отряда грызунов'],
];

buildDefinitionList($definitions);
// => '<dl><dt>Блямба</dt><dd>vВыпуклость, утолщение на поверхности чего-либо</dd><dt>Бобр</dt><dd>Живтоное из отряда грызунов</dd></dl>';
  -->

<?php

function buildDefinitionList($array)
{
    $result = [];
    foreach ($array as $value) {
        $result[] = "<dt>{$value[0]}</dt><dd>{$value[1]}</dd>";
    }
    $innerValue = implode('', $result);
    return "<dl>{$innerValue}</dl>";
}