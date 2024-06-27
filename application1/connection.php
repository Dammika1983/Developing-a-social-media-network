<?php
class database 
{
    private $host = "localhost";
    private $username = "Dammika1";
    private $password = "Dammika123";
    private $db = "myfriends_db";
    
    function connect(){        
       $connection = mysqli_connect($this->host, $this->username, $this->password, $this->db); 
       return $connection;
    }
    function read($query){
        $conn = $this->connect();
        $result = mysqli_query($conn,$query);
        if (!$result) {
         return false;
        }else{
            $data = false;
            while ($row = mysqli_fetch_assoc($result))
            {
             return $data[] = $row;
            }
            return $data;
            
                    
        }        
    }
    function save($query){
        $conn = $this->connect();
        $result = mysqli_query($conn,$query);
        if (!$result) {
         return false;
        }else{
            return true;
        }
    }
}


/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

