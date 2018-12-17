<?php

var_dump($_POST); 


if (Validate())
{
   if (Authenticate($_POST['username'],$_POST['password']))
   {
       echo "Welcome user: ".$_POST['username']; 
   }  
   else 
   {
       Redirect("form.php?err=1");
   }
}
else 
{
   Redirect("form.php?err=2"); 
}

function Redirect($url)
{
   return header("Location:"."http://localhost/first/".$url);
}

function Authenticate($username, $password)
{
    $usr = "admin";
    $pass = "12345"; 

    if ((Sanitize($username)==$usr) and (Sanitize($password)==$pass))
    {
        return TRUE; 
    }
    return FALSE; 
}

function Validate()
{
    if (empty(Sanitize($_POST['username'])))
    {
        return FALSE;
    }
    
    if (empty(Sanitize($_POST['password'])))
    {
        return FALSE; 
    }

    return TRUE; 
}

// clean up the string from spaces and code 
// to avoid injection
function Sanitize($input)
{
    // acts as a failsafe for type mismatch --OPTIONAL--
    if (empty($input) or (!isset($input))) return FALSE; 
    //return result
    return str_replace(" ", "", strip_tags($input));
}

?>