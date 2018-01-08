<?php
/**
 * Date: 08-Jan-18
 * Time: 7:19 PM
 */

var_dump($_POST);

if (isset($_POST['submit']) and $_POST['submit']=="Register")
{
    if (Validate_Registration($_POST['username'],$_POST['password']))
    {
        $stmt = new PDO('mysql:host=localhost;dbname=test','root','root1234') or die('error');
        $sql = "SELECT username from `usr` WHERE username = '{$_POST['username']}'";
        $result  = $stmt->query($sql);
        $data = $result->fetchAll(PDO::FETCH_ASSOC);
        if (!empty($data))
        {
            echo "User Exists\n";
            echo RegisterForm();
        }
        else
        {
            $sql="INSERT INTO `usr` VALUES ('' , '{$_POST['username']}', '{$_POST['password']}')";
            echo $sql;
            $result = $stmt->query($sql);
            echo $stmt->lastInsertId();
            echo "\n SUCCESS!";
        }
    }
}
else
{
    echo RegisterForm();
}




function Validate_Registration($username, $password)
{
    if (empty(strip_tags($username)) and empty(strip_tags($password)))
    {
        return false;
    }
    else
    {
        return true;
    }

}

function RegisterForm()
{
    $html  = "<form id='register_form' method='post' action=''>";
    $html .= "Username: <input type='text' name='username' placeholder='Your username'  required='required'>";
    $html .= "Password: <input type='password' name='password' placeholder='Type a password' required='required'>";
    $html .= "<input type='submit' name='submit' value='Register'>";
    $html .= "</form>";

    return $html;
}


?>