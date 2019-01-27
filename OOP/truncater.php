<!-- Реализуйте класс Truncater с единственным методом truncate. 
В классе уже присутствует конфигурация по умолчанию:

const OPTIONS = [
    'separator' => '...',
    'length' => 200,
];
separator отвечает за символ(ы) добавляющиеся в конце, после обрезания строки, а length это длина до которой происходит сокращение. Если строка короче чем эта опция, то никакого сокращения не происходит. Конфигурацию по умолчанию можно переопределить передав новую в конструктор (она мержится с тем что в классе), а также через передачу конфигурации вторым параметром в метод truncate. Оба этих способа можно комбинировать.

$truncater = new Truncater();
$actual = $truncater->truncate('one two');
$this->assertEquals('one two', $actual);
$actual = $truncater->truncate('one two', ['length' => 6]);
$this->assertEquals('one tw...', $actual);
$actual = $truncater->truncate('one two', ['separator' => '.']);
$actual = $truncater->truncate('one two', ['length' => '3']);
$this->assertEquals('one...', $actual); -->

<?php

class Truncater
{
    const OPTIONS = [
        'separator' => '...',
        'length' => 200,
    ];

    // BEGIN (write your solution here)
    private $options = [];

    public function __construct($options = [])
    {
        $this->options = array_merge(self::OPTIONS, $options);
    }
    public function truncate($string, $callOptions = [])
    {
        $newOptions = array_merge($this->options, $callOptions);

        $substr = substr($string, 0, $newOptions['length']);

        if (strlen($substr) < strlen($string)) {
            return "{$substr}{$newOptions['separator']}";
        } else {
            return $substr;
        }
    }
    // END
}