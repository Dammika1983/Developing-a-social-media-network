<?php

class Index
{
    private $error = "";
    
        
    public function eval($data) 
    {
        $email = $data['email'];
        $password = $data['password'];
        
        
        
        $query = "select * from friends where email = '$email' limit 1";
        //insert data in to the DB
        $DB = new database();
        $result = $DB->read($query);
        
        if($result)
        {
            $row = $result[0];
            
            if($this->passhas($password) == $row['password'])
            
            {
                //initiate session
                $_SESSION['myfriends_id'] = $row ['id'];

            }else 
            {
                $this->error .= "Please enter valid password.<br>";
            }
        }else 
        {
            $this->error .= "Please enter registed Email.<br>";
            
        }
        
        return $this->error;    
        
        
    }
    //PW hash
    private function passhas($text) 
    {
        $text = hash("sha1", $text);
        return $text;
    }


    public function check_index($id) 
    {
         $query = "select id from friends where id = '$id' limit 1";
        //insert data in to the DB
        $DB = new database();
        $result = $DB->read($query);
        
        if($result)
        {
            return true;  
        }
        return false;
    }
    
    
}

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

