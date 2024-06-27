<?php

class Signup {
    private $error = "";
            
    public function eval($data)
    {
        foreach ($data as $key => $value) {
            if(empty($value)){
                $this->error = $this->error . $key ."is required!<br>";
            }
            //form validation
            if($key == "email"){
                if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$value)){
                $this->error = $this->error . "Please enter valid email<br>";
                }
            }
            if($key == "first_name"){
                if (is_numeric($value)){
                $this->error = $this->error . "Please input only letters<br>";
                }
            }
            if($key == "last_name"){
                if (is_numeric($value)){
                $this->error = $this->error . "Please input only letters<br>";
                }
            }
        
        } 
        
        if($this->error == "")
        {
          // If there is no error  
            $this->create_friend($data);
        } else {
            return $this->error;
        }
    }
    public function create_friend($data) 
    {
        $first_name = $data['first_name'];
        $last_name = $data['last_name'];
        $email = $data['email'];
        $password = $data['password'];
        
        
        
        $query = "insert into friends "
                . "(first_name, last_name, email, password) "
                . "values ('$first_name','$last_name','$email','$password')";
        //insert data in to the DB
        $DB = new database();
        $DB->save($query);
    }
    
}

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

