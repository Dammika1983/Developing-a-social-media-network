<?php

    session_start();
    $cookie_id = "id";
    $cookie_password = "password";
    setcookie($cookie_id, $cookie_password, time() + (86400 * 60), "/");
    
    
    include("connection.php");
    include("loginclass.php");
    include("friendclass.php");
    include("textclass.php");
    
    //verify if user sign in
    if(isset ($_SESSION['myfriends_id']) && is_numeric ($_SESSION['myfriends_id']))
    {
        $id = $_SESSION['myfriends_id'];
        $loginclass = new Loginclass();
        $loginclass->check_index($id);
        if($result)
        {
           //retrive friends data
            $friendclass = new Friendclass();
            $friendclass_data = $friendclass->get_data($id);
            if(!$friendclass_data)
            {
                 header("Location: index.php");
            die;
            }
            //texting starts
            if($_SERVER[REQUEST_METHOD] == "POST")
            {
                var_dump($_FILES);
                
                $post = new Post();
                $id = $_SESSION[myfriend_id];
                $result = $post-> create_text($id, $POST, $_FILES);
               
            } 
                
            
            
        }else
        {
            header("Location: index.php");
            die;
        }
    }else 
        {
            
        }
    
        

?>
<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Profile|Myfriends</title>
        <style>
            #ybar{
                height: 50px;
                background-color: lime;
                color: yellow;                    
            }
            #search_box{
                width: 300px;
                height: 20px;
                padding: 5px;
                font-size: 15px;
                    
                    
            }
            
            #my_img {
                width:140px;
                margin-top: -250px;
                border-radius: 50px;
                border: solid 3px lightyellow;                    
            }
            
            #my_button{
                width: 120px;
                display: inline-block;
                margin: 3px;
            }
            
            #myfriends_pic{
                width: 70px;
                float: right;
                margin: 8px;
                    
            }
            
            #myfriends_bar{
                background-color: lavenderblush;
                min-height: 380px;
                margin-top: 15px;
                color: #eeeeee;
                padding: 7px;                
            }
            
            #myfriends{
                clear: both;
                font-size: 12px;
                font-weight: bold;
                color: black;               
            }
            
            textarea{
                width: 95%;
                border: none;
                font-family: calibri;
                font-size: 12px;
                height: 55px;
            }
            
            #mypost_bar{
                margin-top: 22px;
                background-color: lavender;
                padding: 12px;                              
            }
            
            #mypost{
                padding: 5px;
                font-size: 14px;
                display: flex;
                margin-bottom: 22px;
            }
            
           
        </style>
    </head>
    <body style="font-family:calibri; background-color: lavenderblush;">
        <div id="ybar">
            <div style="width: 700px;margin: auto;font-size: 25px;">
            
                Profile &nbsp&nbsp <input type="text" id="search_box" placeholder="Search for friends">  
            </div>
        </div>
        <div style="width: 810px;margin:auto;min-height: 420px;">
            <div style="background-color: lavender;text-align: center;color: brown">
                <img src="image/5.jpg" style="width: 100px">
                <br>
                <div style="font-size: 22px;color:brown;">Dammika</div>
                <br>
                
                <div id="my_button">About</div>
                <div id="my_button">Friends</div>
                <a herf="profile.php?section=gallery"><div id="my_button">Gallery</div></a>               
                
            </div>
            
            <div style="display: flex;">
                <div style="background-color: azure;min-height: 350px;flex:2;">
                    <div style="border:solid thin white;padding:12px;">
                        <form method="post">
                            <textarea name="post" placeholder="Post your thoughts"></textarea>
                            <!--Add image-->
                            <input type="file" name="file">
                            <input id="post_button" type="submit" value="Post">
                            <br> 
                        </form>
                    </div>
                    
                </div>
                
                <div style="background-color: lightblue;min-height: 350px;flex:1;">
                    <div style="myfiends_bar">
                        
                        Friends<br>
                        <div id="myfriends">
                            <img id="myfriends_pic" src="image/6.jpg">
                            John
                            <br>
                            
                        </div>
                         <div id="myfriends">
                            <img id="myfriends_pic" src="image/7.jpg">
                            Rose
                            <br>                            
                        </div>
                        <div id="myfriends">
                            <img id="myfriends_pic" src="image/8.jpg">
                            Pauline
                            <br>                            
                        </div>                    
                        
                    </div>
                    
                    
                    
                </div> 
                <div style="background-color: lightsalmon;min-height: 350px;flex:1;">
                        <!--Display active friends-->
                        Active Friends<br>
                        <div id="myfriends">
                            <img id="myfriends_pic" src="image/6.jpg">
                            John
                            <br>
                            
                        </div>
                
            </div>
            
            
            
        </div>
    </body>
</html>
