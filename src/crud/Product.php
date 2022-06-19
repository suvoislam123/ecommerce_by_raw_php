<?php 
namespace crud;
include_once("CRUD.php");
use crud\CRUD;
class Product extends CRUD{
    public function create($pdo,$sql,$data){

    }
    public function read($pdo,$sql){
        $stmt = $pdo->query($sql);
        $data = $stmt->fetchAll();
        if($data){
            return $data;
        }else{
            echo "You dont have any result";
        }
    }
    public function delete($pdo,$id){

    }
    public function update($pdo,$sql){

    }
}