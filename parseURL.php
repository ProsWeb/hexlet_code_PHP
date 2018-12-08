<!-- Реализуйте класс Url который описывает переданный 
в конструктор HTTP адрес и позволяет извлекать из него части:


$url = new Url('http://yandex.ru?key=value&key2=value2');
$url->getScheme(); // http
$url->getHost(); // yandex.ru
$url->getQueryParams();
// [
//     'key' => 'value',
//     'key2' => 'value2'
// ];
$url->getQueryParam('key'); // value
// второй параметр - значение по умолчанию
$url->getQueryParam('key2', 'lala'); // value2
$url->getQueryParam('new', 'ehu'); // ehu
Подсказка:

То что нужно реализовать описано в интерфейсе UrlInterface
Для разбора адреса воспользуйтесь функцией parse_url
Query Params придется разобрать самостоятельно -->

<?php

class Url implements UrlInterface
{
    public $url;

    public function __construct($url)
    {
        $this->url = $url;
    }

    public function getScheme()
    {
        return parse_url($this->url, PHP_URL_SCHEME);
    }

    public function getHost()
    {
        return parse_url($this->url, PHP_URL_HOST);
    }

    public function getQueryParams()
    {
        $startPos = strpos($this->url, '?') + 1;
        $subString = substr($this->url, $startPos);
        parse_str($subString, $array);

        return $array;
    }

    public function getQueryParam($key, $defaultValue = null)
    {
        $array = $this->getQueryParams();

        foreach ($array as $findkey => $value) {
            if ($findkey == $key) {
                return $value;
            }
        }
        return $defaultValue;
    }
}