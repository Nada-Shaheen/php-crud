<?php 

class db 
{
    public $serrver_name = "localhost";
    public $user_name ="root";
    public $password="";
    public $database_name="orange";   
    
    public function connect(){
        //database connection_aborte
        $connection = mysqli_connect($this->$serrver_name,$this->$user_name,$this->$password,$this->$database_name);

        //check connection

        if(!$connection){
            die("connection faild :".mysqli_connect_error());
        }else{
            echo "connected...";
        }
    }


}




?>