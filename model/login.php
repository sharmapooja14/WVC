<?php 
require_once ("model/config.php");
class login
{
    private $db_handle;
    
    function __construct()
     {
        $this->db_handle = new config();
    }
    
    function adduser($username, $password) {
        $query = "INSERT INTO login (username,password) VALUES (?, ?)";
        $paramType = "siii";
        $paramValue = array(
            $username,
            $password
            
        );
        
        $insertId = $this->db_handle->insert($query, $paramType, $paramValue);
        return $insertId;
            }
}
?>