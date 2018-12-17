<?php
/**
 * Date: 17-Dec-15
 * Time: 6:59 PM
 */



if ((!empty($_POST['Register'])) && ($_POST['Register']=="Register"))
{
    Sanitize_POST();
    var_dump($_POST);
    $data = null;
    Validate($data);
    if (Validate($_POST))
    {
        echo "VALIDATED!";
    }
    else
    {
        echo "Data Error";
    }
}
else
{
    echo Display_Form();
}

function Validate($data)
{
    $valid = TRUE;
    if (is_array($data))
    {
        foreach ($data as $key => $value)
        {
            if (empty($value))
            {
                $valid = FALSE;
            }
        }
    }
    else
    {
        if (empty($data))
        {
            $valid = FALSE;
        }
    }
    return $valid;
}

function Sanitize_POST()
{
    foreach ($_POST as $key=>$value)
    {
       $_POST[$key] = Sanitize_Spaces($value);
    }
}

/**
 * @param $text
 * @return mixed
 */
function Sanitize_Spaces($text)
{
    return str_replace(" ", "", $text);
}

function Display_Form()
{
    $html="<form method='POST' action=''>";
    $html.="<table border='0'>";
    $html.="<tr><td colspan='2'>Register</td> </tr>";
    $html.="<tr><td>Username</td><td><input type='text' name='username'></td></tr>";
    $html.="<tr><td>Password</td><td><input type='password' name='password'></td></tr>";
    $html.="<tr><td>Email</td><td><input type='email' name='email'></td></tr>";
    $html.="<tr><td>Gender</td><td><input type='radio' name='gender' value='male' checked>Male<input type='radio' name='gender' value='female'>Female</td></tr>";
    $html.="<tr><td colspan='2'><input name='Register' type='submit' value='Register'></td></tr>";
    $html.="</table></form>";
    return $html;
}

?>