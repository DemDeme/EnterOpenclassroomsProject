<?php

namespace Application\Lib\Database;
//Object PDO for creating database connection
class DatabaseConnection
{
    public ?\PDO $database = null;
    
    public function getConnection(): \PDO
    {
        if ($this->database === null) {
            $this->database = new \PDO('mysql:host=localhost;dbname=passionplante;charset=utf8', 'root', '');
        }
        return $this->database;
    }
}