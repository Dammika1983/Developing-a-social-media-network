<?php
session_start();
$cookie_email = "email";
$cookie_password = "password";
setcookie($cookie_email, $cookie_password, time() + (86400 * 60), "/");
    
    include("connection.php");
    include("loginclass.php");
    
    $email = "";
    $password = "";

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $index = new Index();
        $result = $index->eval($_POST);
        
        //result not equal
        if($result != ""){
            echo"<div style='text-align:center;font-size:11px;color:black;background-color:white;'>";
            echo "<br>Please correct the errors:<br><br>";
            echo $result;
            echo"</div>";
        //redirect new users
        }else{
            header(Location: profile.php);
            die;
        }
        
        $email = $_POST['email'];
        $password = $_POST['password'];

    }  
?>


<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>My Friends|Sign In</title>
    </head>
    <style>
        #mycol{
            height:95px;               
            background-color:
            yellow;padding: 5px;
        }
        #my_button{
            background-color:orange;
            width:65px;
            text-align:center;
            float: right;
        }
        #mybcol{
            background-color: lightgrey;
            width: 600px;                
            height: 200px;
            margin: auto;
            margin-top:45px;
            padding: 5px;
            text-align: center;
            padding-top: 50px;
        }
        #text{
            height: 35px;
            width: 400px;
            border-radius: 3px;
            padding: 3px;
            font-size: 15px
        }
        #button{
            width: 400px;
            height: 35px;
            border-radius: 4px;
            font-weight: bold;
            border: none;
            background-color:yellowgreen;
        }
    </style>
    <body style="font-family: calibri; background-color: lightyellow;padding:5px;">
        <div id="mycol">
            <div style="font-size: 42px;">My Friends</div>
            <div id="my_button">Sign up</div>
        </div>
        <div id="mybcol">
            <form method="post">
                Sign In<br><br>
                <input name="email" value="<?php echo $email?>" value="<?php echo $email?>" type="text" id="text" placeholder="Please type your Email"><br><br>
                <input name="password" value="<?php echo $password?>" type="password" id="text" placeholder="Please type your Password"><br><br>
                <input type="submit" id="button" value="Log in">
                <br><br>
            
            </form>
        </div>
    </body>
</html>
