<?php
/**
 * Date: 22-Nov-17
 * Time: 7:12 PM
 */
session_start();
// DEBUG for POST
var_dump($_POST);

$username = Sanitize($_POST['username']);
$password = Sanitize($_POST['password']);

// usr: admin pass:abc123

if (Validate($username,$password))
{
    if (RegisterUserSession(Authenticate($username,$password)))
    {
        Redirect("valid.php");
    }
     else
     {
         Redirect("login.html");
     }
}
else
{
    Redirect("login.html");
}

function RegisterUserSession($uid)
{
    if ((empty($uid)) || (!is_int($uid)) || ($uid == false)) return false;
    $_SESSION['uid'] = $uid;
    $_SESSION['uname'] = "admin";
    return true;
}

function Authenticate($usr, $pass)
{
    if ($usr=='admin' && $pass=='abc123') return rand(10,120);
    return false;
}

function Redirect($path)
{
    header("Location: ".$path);
}

function Validate($usr, $pass)
{
    if (empty($usr) || empty($pass)) {return false;}
    return true;
}

function Sanitize($input)
{
    return str_replace(" ", "", htmlspecialchars(strip_tags($input)));
}

?>