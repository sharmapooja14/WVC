<?php 
require_once ("model/config.php");
class signup
{
    private $db_handle;
    
    function __construct()
     {
        $this->db_handle = new config();
    }
    
    function getUser($id) {
        $query = "SELECT * FROM login WHERE id = ?";
        $paramType = "i";
        $paramValue = array(
            $id
        );
        
        $result = $this->db_handle->runQuery($query, $paramType, $paramValue);
        return $result;
    }
?>
 
