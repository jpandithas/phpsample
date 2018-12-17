<?php
/**
 * Date: 08-Dec-16
 * Time: 7:32 PM
 */
//var_dump($_SERVER);

if (Validate())
{
    if (Authenticate())
    {
        //echo "User found!";
        Create_Session_User();
        Redirect("valid.php"); //to valid page
    }
    else
    {
        //echo "User not found!";
        Redirect("login.php?error=2"); //with an error message
    }
}
else
{
    //echo "Validation Error";
    Redirect("login.php?error=1"); // with an error msg
}



function Validate()
{
   if (empty($_POST['username']) or empty($_POST['password']))
   {
       return false;
   }
   return true;
}

function Strip_POST()
{
    $username  = Sanitize_String($_POST['username']);
    $password = Sanitize_String($_POST['password']);
    return array("username" => $username, "password"=>$password);
}

function Sanitize_String($string)
{
    return strip_tags(str_replace(" ","",$string));
}

function Authenticate()
{
    $data = Strip_POST();
    if ( ($data['username'] == 'john') and ($data['password']== '12345')) return true;
    return false;
}

function Create_Session_User()
{
    session_start(); //create the session in the server
    $_SESSION['uname'] = "john"; //create the user within $_SESSION
}

function Redirect($path)
{
    $location = "Location: ";
    header($location.$path);
}
?>