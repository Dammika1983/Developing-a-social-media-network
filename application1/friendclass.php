<?php
class Friendclass
{
    public function get_data($id)
    {
        $query = "select * from friends where id = $id limit 1";
        
        $DB = new database();
        $DB->read = $DB->read($Query);
        if ($result) 
        {
            $row = $result[0];
            return $row;
        }else
        {
            return false;
        }
    }
}

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

