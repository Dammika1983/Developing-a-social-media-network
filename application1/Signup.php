<?php
    
    include("connection.php");
    include("signupclass.php");
    
    $first_name = "";
    $last_name = "";
    $email = "";

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $signup = new Signup();
        $result = $signup->eval($_POST);
        
        //result not equal
        if($result != ""){
            echo"<div style='text-align:center;font-size:11px;color:black;background-color:white;'>";
            echo "<br>Please correct the errors:<br><br>";
            echo $result;
            echo"</div>";
        //redirect new users
        }else{
            header(Location: index.php);
            die;
        }
        
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];

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
        <title></title>
    </head>
     <meta charset="UTF-8">
        <title>My Friends|Sign Up</title>
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
            height: 400px;
            margin: auto;
            margin-top:45px;
            padding: 50px;
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
            <div id="my_button">Sign In</div>
        </div>
        <div id="mybcol">
            Sign Up<br><br>
            <form method="post" action="">
            <input value="<?php echo $first_name?>" name="first_name" type="text" id="text" placeholder="Please type your First name"><br><br>
            <input value="<?php echo $last_name?>" name="last_name" type="text" id="text" placeholder="Please type your Last name"><br><br>
            <input value="<?php echo $email?>" name="email" type="text" id="text" placeholder="Please type your Email"><br><br>
            <input name="password" type="password" id="text" placeholder="Please type your Password"><br><br>
            <input name="password2" type="password" id="text" placeholder="Retype type your Password"><br><br>
            <input type="submit" id="button" value="Sign up">
            <br><br>
            </form>
        </div>
    </body>
</html>
