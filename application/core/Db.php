<?php


namespace application\core;


class Db
{
    private $db;

    public function __construct()
    {
        $dbconn = require_once ('application/config/db.php');
        try {
            $this->db = new \PDO('mysql:host='.$dbconn['host'].';dbname='.$dbconn['dbname'], $dbconn['user'], $dbconn['password']);
        } catch (\PDOException $exception) {
            die('Ошибка подключения: '.$exception->getMessage());
        }
    }

    protected function execute(string $query, array $params = []) : array
    {
        if (empty($params)) {
            $stmt = $this->db->query($query);
            return $stmt->fetchAll();
        }
        $stmt = $this->db->prepare($query);
        $stmt->execute($params);
        return $stmt->fetchAll();
    }

}