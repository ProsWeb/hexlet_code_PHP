<!-- Реализуйте интерфейс App\DDLManagerInterface в классе App\DDLManager

Пример использования:

$dsn = 'sqlite::memory:';
$ddl = new DDLManager($dsn);

$ddl->createTable('users', [
    'id' => 'integer',
    'name' => 'string'
]);
Получившийся запрос в базу:

CREATE TABLE users (
    id integer,
    name string
); -->

<?php

class DDLManager implements DDLManagerInterface
{
    private $pdo;

    // BEGIN (write your solution here)
    public function __construct($dsn, $user = null, $pass = null)
    {
        $options = [\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION];
        $this->pdo = new \PDO($dsn, $user, $pass);
    }

    public function createTable($table, array $params)
    {
        $result = [];
        foreach ($params as $key => $value) {
            $result[] = "{$key} {$value}";
        }
        $query = implode($result, ", ");
        $this->pdo->exec("CREATE TABLE {$table} ({$query})");
    }
    // END

    public function getConnection()
    {
        return $this->pdo;
    }
}