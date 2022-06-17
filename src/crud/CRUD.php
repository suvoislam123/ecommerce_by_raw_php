<?php 
namespace src\common;
abstract class CRUD{
    public $host = '127.0.0.1';
    public $db   = 'syndicutxdb';
    public $user = 'root';
    public $password = '';
    public $port = "3306";
    public $charset = 'utf8mb4';
    public static function connect(){
        $options = [
            \PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
            \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
            \PDO::ATTR_EMULATE_PREPARES   => false,
        ];

        $dsn = "mysql:host=$host;dbname=$db;charset=$charset;port=$port";
        try {
            $pdo = new \PDO($dsn, $user, $password, $options);
        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage(), (int)$e->getCode());
        
        }
        return $pdo;
    }
    public abstract function read($pdo,$query);
    public abstract function create($pdo,$query);
    public abstract function delete($pdo,$query);
    public abstract function update($pdo,$query);
}