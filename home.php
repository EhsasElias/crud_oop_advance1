<?php

require('db.php');

class HomePage{
    public $dbObject;
    function __construct()
    {
        $this->dbObject=new DB();
        
    }

}



$home=new HomePage();
if(isset($_GET['select'])){
$result=$home->dbObject->select("books",$_GET['book_id']);
echo "<div style='border:1px solid gray;width:50%;margin:auto;padding:20px'>";
foreach($result as $r)
{
    echo $r->id."=>".$r->name."....".$r->image."....".$r->details."....". $r->price."<br>";
}
echo "</div>";
}

if(isset($_GET['update'])){
    $home->dbObject->update("books",$_GET['name'],$_GET['image'],$_GET['details'],$_GET['price'],$_GET['book_id']);
    $result=$home->dbObject->selectAll("books");
    echo "<div style='border:1px solid gray;width:50%;margin:auto;padding:20px'>";
    foreach($result as $r)
    {
        echo $r->id."=>".$r->name."....".$r->image."....".$r->details."....". $r->price."<br>";
    }
    echo "</div>"; 
}
if(isset($_GET['add'])){
    $home->dbObject->add("books",$_GET['name'],$_GET['image'],$_GET['details'],$_GET['price']);
    $result=$home->dbObject->selectAll("books");
    echo "<div style='border:1px solid gray;width:50%;margin:auto;padding:20px'>";
    foreach($result as $r)
    {
        echo $r->id."=>".$r->name."....".$r->image."....".$r->details."....". $r->price."<br>";
    }
    echo "</div>";
}

if(isset($_GET['delete'])){
    $home->dbObject->delete("books",$_GET['book_id']);
    $result=$result=$home->dbObject->selectAll("books");
    
    echo "<div style='border:1px solid gray;width:50%;margin:auto;padding:20px'>";
    foreach($result as $r)
    {
        echo $r->id."=>".$r->name."....".$r->image."....".$r->details."....". $r->price."<br>";
    }
    echo "</div>";
    }
?>