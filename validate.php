<?php
/**
 * Date: 03-Dec-15
 * Time: 7:06 PM
 */

//var_dump($_POST);
//var_dump($_GET);

$username = Sanitize_Spaces($_POST['name']);
$password = Sanitize_Spaces($_POST['password']);

if (!Validate($username,$password))
{
  Redirect("myform.php?err_no=1");
}
else
{
    if (Authenticate_User($username, $password))
    {
        Create_Session($username);
        Redirect("valid.php");
    }
    else
    {
        Redirect("myform.php?err_no=2");
    }
}

/**
 * @param $path
 */
function Redirect($path)
{
    header("Location:".$path);
}
/**
 * @param $text
 * @return mixed
 */
function Sanitize_Spaces($text)
{
    return str_replace(" ", "", $text);
}

/**
 * @param $usr
 * @param $passwd
 * @return bool
 */
function Validate($usr, $passwd)
{
    if (empty($usr) || empty($passwd))
    {
        return False;
    }
    else
    {
        return True;
    }
}

/**
 * @param $username
 * @param $password
 * @return bool
 */
function Authenticate_User($username, $password)
{
    if ($username == "admin" && $password=="1234")
    {
        return True;
    }
    else
    {
        return False;
    }
}

function Create_Session($username)
{
    session_start();
    $_SESSION['uname'] = $username;
}

?>