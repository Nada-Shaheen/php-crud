<?php 
include_once 'categories.php';

$category =new categories();

$connect = $category->connect();

$resault = $category->add($connect,$_POST['name']);

if($resault){
    header('location:select-all.php?reg=1');
}else{
    echo mysqli_error($connect);
}


?>