<?php
/**
 * Date: 28-Nov-16
 * Time: 8:05 PM
 */

$mood = "sad";

if ($mood == "happy")
{
    echo "Hooray I am happy!!";
}
else
{
    echo "Not happy but <b>{$mood}</b>";
}

echo "</br> Did you see my mood? </br>";

if ($mood == "unhappy") 
{ 
    echo "I am unhappy!";
}


// null is a data type. Triggers the isset() function 
// $user = ""; Triggers the empty() function 

$user = null; //use this
$password; # avoid this
$password = 12345;


if (!isset($user))  
{
    echo "User not found!"; 
}
elseif (empty($user))
{
    echo "User Data Empty!"; 
}
else 
{
    echo "The user is: {$user}";
}

/* if (!$user) //very risky if the var does not exist
{
    echo "Can't find a user!</br>";
} */


if (!isset($password) or empty($password)) //safe to use for most cases + ppl will know wut u r asking
{
    echo "You do not have a password";
}
else
{
    echo "You do have a password";
    if (is_string($password))
    {
        echo "This could be acceptable";
    }
    else
    {
        echo "<br> password is: ".(gettype($password));
    }
}

?>