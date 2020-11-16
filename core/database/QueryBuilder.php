<?php

class QueryBuilder {

    public $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    function selectAll($table)
    {
        $statement = $this->pdo->prepare("select * from {$table}");

        $statement->execute();

        $results = $statement->fetchAll(PDO::FETCH_CLASS);

        return $results;
    }

    function selectRow($table, $email)
    {
        $statement = $this->pdo->prepare("select * from {$table} where email = '{$email}'");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    function selectId($table, $id)
    {
        $statement = $this->pdo->prepare("select * from {$table} where id = {$id}");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    function insert($table, $data)
    {
        foreach ($data as $key => $value) {
            $keys .= $key . ',';
            $values .= '"' . $value . '",';
        }

        try {
            $statement = $this->pdo->prepare('INSERT INTO '. $table. ' (' . trim($keys, ',') . ') ' . 'VALUES' . ' (' . trim($values, ',') . ')');
            $statement->execute($data);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    function edit($table, $id, $data)
    {
        foreach ($data as $key => $value) {
            $all .= $key . '=' . "'" . $value . "'" . ',';
        }

        $newAll = trim($all, ',');
        $sql = "UPDATE {$table} SET {$newAll} WHERE id={$id}";

        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute($data);

        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    function delete($table, $id)
    {
        $sql = "DELETE FROM {$table} WHERE id={$id}";
        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute();

        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

//    function leftJoin()
}