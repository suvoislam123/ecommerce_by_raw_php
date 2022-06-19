<?php 
namespace crud;   
include_once("CRUD.php");
use crud\CRUD;
class Slider extends CRUD{
    
    public function create($pdo,$sql,$data){
        $stmt = $pdo->prepare( $sql);
        $result = $stmt->execute($data);
        if($result){
            //  set appropriate messages
        }else{
            //  set appropriate messages
        }

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
    public function delete($pdo,$id){
        $pdo->prepare("DELETE FROM slider WHERE id=?")->execute([$id]);
    }
}