<html>
<head></head>
<body>
<form name="form1" method="POST" action="validate.php">
<table border=0 bgcolor="lightgray">
<tr> <td colspan=2 align="center">Login Form</td></tr>
    <tr><td colspan="2"><?php Print_Error_Msg(); ?> </td></tr>
<tr><td>Username:</td> <td><input type="text" name="name"></td></tr>

<tr><td>Password:</td> <td><input type="password" name="password"></td></tr>

<tr> <td colspan=2 align="center"><input type="submit" name="Submit" value="Login"></td></tr>
</table>
</form>
</body>
</html>
<?php
function Read_Error_Num()
{
    if (!empty($_GET['err_no']))
    {
        $msg = $_GET['err_no'];
        return $msg;
    }
    else
    {
        $msg = null;
        return $msg;
    }

}
Function Print_Error_Msg()
{
    switch(Read_Error_Num())
    {
        case "1":
            echo "Empty Username or Password";
            break;
        case "2":
            echo "Incorrect Login Details";
            break;
    }
}
?>