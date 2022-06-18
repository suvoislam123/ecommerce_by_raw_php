<?php 
namespace crud;
abstract class CRUD{
    
    public static function connect(){
        $host = '127.0.0.1';
        $db   = 'ecommerce';
        $user = 'root';
        $password = '';
        $port = "3306";
        $charset = 'utf8mb4';
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
    public abstract function read($pdo,$sql);
    public abstract function create($pdo,$sql);
    public abstract function delete($pdo,$sql);
    public abstract function update($pdo,$sql);
}