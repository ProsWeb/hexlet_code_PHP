<!-- Query класс который предоставляет абстракцию поверх sql. 
Его главное достоинство это возможность строить динамические запросы без склеивания строк.

Пример использования:

$query = new Query($pdo, 'users');
$query = $query->where('from', 'github');
$query = $query->where('id', '3')->where('age', 21);

// SELECT * FROM users WHERE from = 'github' AND id = 3 AND age = 21;
$query->toSql();

$query->all();
Query.php
Реализуйте метод toSql. -->

<?php

class Query
{
    private $pdo;
    private $where = [];

    public function __construct($pdo, $table, $where = [])
    {
        $this->pdo = $pdo;
        $this->table = $table;
        $this->where = $where;
    }

    public function where($key, $value)
    {
        $where = [$key => $value];
        return $this->getClone($where);
    }

    public function all()
    {
        return $this->pdo->query($this->toSql())->fetchAll();
    }

    public function toSql()
    {
        // BEGIN (write your solution here)
        $whereParts = array_map(function ($key, $value) {
            $quotedValue = $this->pdo->quote($value);
            return "{$key} = {$quotedValue}";
        }, array_keys($this->where), $this->where);
        $wherePartsWithAnd = implode($whereParts, " AND ");

        if (empty($wherePartsWithAnd)) {
            $query = "SELECT * FROM {$this->table};";
            return $query;
        } else {
            $query = "SELECT * FROM {$this->table} WHERE {$wherePartsWithAnd}";
            return $query;
        }
        // END
    }

    private function getClone($where)
    {
        $mergedData = array_merge($this->where, $where);
        return new self($this->pdo, $this->table, $mergedData);
    }
}