<?php
class Post
{
    private $error ="";
    public function create_text($id, $data) 
    {
        if(!empty($data['post']))
        {
            $post = $data('post');
            $textid = $this->create_textid();
            $query = "insert into text (id, textid, text) value ('$id', '$textid', '$text')";
            $DB = new database();
            $DB->save($query);
            
        }else
        {
            
        }
        
        return $this->error;
    }
    private function create_textid() 
    {
        $length = rand(4,20);
        $number = "";
        for ($i=0; $i < $length; $i++) 
        {
            $new_rand = rand(0,8);
            
            $number = $number =  new_rand;
        }
                
    }
    
    
}
/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

