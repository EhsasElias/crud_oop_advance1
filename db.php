<?php
class DB{
    private $dsn;
    private $username;
    private $password;
    private $database;
    private $pdo;
    
    function __construct()
    {
        $this->database="coding-acadimy";
        $this->dsn="mysql:host=localhost;dbname=$this->database;charset=utf8mb4";
        $this->username="root";
        $this->password="";
        $this->pdo=new PDO($this->dsn,$this->username,$this->password);
        
    }
    function selectAll($table){
        $stmt=$this->pdo->prepare("select * from $table");
        $stmt->execute(); 
        return $stmt->fetchAll(PDO::FETCH_OBJ);

    }
    function select($table,$id){
        $stmt=$this->pdo->prepare("select * from $table where id=?");
        $stmt->execute([$id]); 
        return $stmt->fetchAll(PDO::FETCH_OBJ);

    }
    function update($table,$name,$image,$details,$price,$id){
        $stmt=$this->pdo->prepare("update books
        set name =?, image =? , details =? , price =?
        where id =?");
        $stmt->execute([$name,$image,$details,$price,$id]); 
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
    function add($table,$name,$image,$details,$price){
        $stmt=$this->pdo->prepare("insert into $table (id, name, image, details, price)
        values (null, ?, ?, ?, ?);");
        $stmt->execute([$name,$image,$details,$price]); 
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
    function delete($table,$id){
        $stmt=$this->pdo->prepare("delete from $table where id=?");
        $stmt->execute([$id]); 
        return $stmt->fetchAll(PDO::FETCH_OBJ);

    }
}
?>