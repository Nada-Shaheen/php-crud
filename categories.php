<?php 
    include_once 'db.php';

    class categories extends db{
        public function add($c,$name){
            //insert query
            $sql = "insert into categories (name) values('".$name."')";


            return mysqli_query($c,$sql);
        }

        public function get_All($c){
            $sql ="select * from categories";

            return mysqli_query($c,$sql);
        }

        public function remove($c,$id){
            $sql ="delete from user where id=".$_GET['id'];

            return mysqli_query($c,$sql);
        }

        public function edit($c,$id){
            
        }

        
    }







?>