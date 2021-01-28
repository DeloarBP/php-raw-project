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

    public function deleteRow($table, $id)
    {
        $sql =  "DELETE FROM `$table` WHERE id={$id}";
        $statement = $this->pdo->prepare($sql);
        $statement->execute();
        return true;
    }

    public function selectALLThisUsers($table, $id)
    {

        if ($id) {
            $statement = $this->pdo->prepare("select * from {$table} where creator_id = {$id}");

            $statement->execute();
            return $statement->fetchAll(PDO::FETCH_CLASS);
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

    //migration function
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

        $sql = "CREATE TABLE issue (
                id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
                user_name VARCHAR(30) NOT NULL,
                dept_name VARCHAR(100) NOT NULL,
                creator_id INT(100) NOT NULL,
                action_taken VARCHAR(100) NOT NULL,
                issue_description TEXT NULL,
                status VARCHAR(20) NOT NULL,
                issue_date DATE NULL,
                action_date DATE NULL
            )";

        $statement = $this->pdo->prepare($sql);
        $statement->execute();

        App::get('database')->insert('user', [
            'first_name' =>  'Root',
            'last_name' =>  'user',
            'email' =>  'root@example.com',
            'password' =>  password_hash('password', PASSWORD_BCRYPT),
            'role' =>  'SuperAdmin',
        ]);

        Session::start();
        Session::set('auth', [
            'id' => 1,
            'name' => 'Root',
            'role' => 'SuperAdmin',
            'isLogin' => true
        ]);

        redirect('dashboard');

    }

    public function dropTable()
    {
        $sql = 'DROP TABLE  user';
        $statement = $this->pdo->prepare($sql);
        $statement->execute();

        $sql = 'DROP TABLE  issue';
        $statement = $this->pdo->prepare($sql);
        $statement->execute();
    }
}
