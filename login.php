<html>
<head>
    <title>Login</title>
    <link href="style.css" type="text/css" rel="stylesheet">
</head>
<body>
<table id="login" align="center">
    <form method="post" action="auth.php">
        <tr><th colspan="2">Login</th></tr>
        <tr><td>Username :</td><td><input type="text" name="username" placeholder="Username"></td></tr>
        <tr><td>Password :</td><td><input type="password" name="password" placeholder="Password"></td></tr>
        <tr><?php get_error_number_from_url()?></tr>
        <tr><td align="center" colspan="2"><input type="submit" name="submit" value="Login"></td></tr>
    </form>
</table>
</body>
</html>

<?php
function get_error_number_from_url()
{
    if (!empty($_GET['error']))
    {
        $error = $_GET['error'];
        switch($error)
        {
            case "1":
                $msg = "Empty Username or Password";
                break;
            case "2":
                $msg = "Incorrect Login details";
                break;
            default:
                $msg = null;
                break;
        }
        if ($msg != null)
        {
            echo "<td colspan='2'>".$msg."</td>";
        }
    }
}
?>