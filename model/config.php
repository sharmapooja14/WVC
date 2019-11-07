<?php
class config
{
   
    private $host = "localhost";
        private $user = "root";
        private $password = "";
        private $database = "api";
        private $conn;

        function __construct() 
        {
            
            $this->conn = $this->connectDB();
        }   
        function connectDB() 
        {
            $conn = mysqli_connect($this->host,$this->user,$this->password,$this->database); //$con = mysqli_connect($host, $user, $password,$dbname);
            return $conn;
           
        }
}
?>

