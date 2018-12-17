<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>My Form</title>
    
</head>
<body>
    <h2>Login</h2>
    <?php GetErrorCode(); ?>
    <form action="validate1.php" method="POST">
        Username: 
        <input type="text" name="username" placeholder="Username" >
        <br/>
        Password:
         <input type="password" name="password" placeholder="Password">
         <br/>
         Customer
         <input type="radio" name="usertype" value="Customer" checked="checked">
         Driver
         <input type="radio" name="usertype" value="Driver">
         <br/>
        <input type="submit" name="submit" value="Login">
    </form>
</body>
</html>

<?php

function GetErrorCode()
{
    if (!empty($_GET['err']))
    {
        switch ($_GET['err'])
        {
            case "1":
            echo "Invalid Login!<br>"; 
            break; 
            case "2": 
            echo "Empty username or passowrd<br>"; 
            break; 
        }
    }
}

?>