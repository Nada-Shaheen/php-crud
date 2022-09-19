<?php 
include_once 'categories.php';

$category =new categories();

$connect = $category->connect();

$resault = $category->remove($connect,$_GET['id']);

if($result){
    header("location:select-all.php");
}else{
    echo "no";
}


?>