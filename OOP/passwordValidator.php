<!-- Реализуйте класс PassworValidator ориентируясь на тесты.

Этот валидатор поддерживает следующие опции:

minLength (по-умолчанию 8) - минимальная длина пароля
containNumbers (по-умолчанию false) - требование содержать хотя бы одну цифру
Массив ошибок в ключах содержит название опции, 
а в значении текст указывающий на ошибку (тексты можно подсмотреть в тестах)

  -->

<?php

class PasswordValidator
{
    // BEGIN (write your solution here)
    public function __construct($newDefaultOptions = [], $defaultOptions = [
            'containNumbers' => false,
            'minLength' => 8
        ])
    {
        $this->array = array_replace($defaultOptions, $newDefaultOptions);
    }

    public function validate($password)
    {
        $errors = [];
        if (strlen($password) < $this->array['minLength']) {
            $errors['minLength'] = 'too small';
        }
        if ($this->array['containNumbers']) {
            if (!$this->hasNumber($password)) {
                $errors['containNumbers'] = 'should contain at least one number';
            }
        }

        return $errors;
    }
    // END

    private function hasNumber($subject)
    {
        return strpbrk($subject, '1234567890') !== false;
    }
}