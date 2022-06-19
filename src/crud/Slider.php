<?php 
namespace crud;   
include_once("CRUD.php");
use crud\CRUD;
class Slider extends CRUD{
    
    public function create($pdo,$sql){
        
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
    public function update($pdo,$sql){
        

    }
    public function delete($pdo,$sql){

    }
}