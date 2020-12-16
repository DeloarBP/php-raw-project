<?php

class QueryBuilder
{
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }


    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("select * from {$table}");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);

    }

    public function insert($table, $parameters)
    {
        $sql = sprintf(
            'insert into %s (%s) values (%s)',
            $table,
            implode(',', array_keys($parameters)),
            ':' . implode(', :', array_keys($parameters))
        );

        try {

            $statement = $this->pdo->prepare($sql);
            $statement->execute($parameters);
            return true;

        } catch(Exception $e) {
            die('whoops, Something went wrong.');
        }

    }

    function fetchUserByEmail($email)
    {
        $sql = 'SELECT * FROM user' . ' WHERE email = :email';

        $statement = $this->pdo->prepare($sql);

        $statement->execute(array(
            ':email' => $email
        ));

        return $statement->fetchAll(PDO::FETCH_CLASS);

    }

    //table create function

    public function createTable()
    {

        $this->dropTable();

        $sql = "CREATE TABLE user(
                id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
                first_name VARCHAR(30) NOT NULL,
                last_name VARCHAR(30) NOT NULL,
                email VARCHAR(70) NOT NULL UNIQUE,
                password VARCHAR(70) NOT NULL,
                role VARCHAR (70) NOT NULL
            )";

        $statement = $this->pdo->prepare($sql);
        $statement->execute();

        return "SuccessFully";

    }

    public function dropTable()
    {
        $sql = 'DROP TABLE  user';
        $statement = $this->pdo->prepare($sql);
        $statement->execute();
    }
}
