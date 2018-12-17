<?php
/**
 * Date: 14-Dec-15
 * Time: 8:49 PM
 */

session_start();
if (empty($_SESSION['uname']))
{
    header("Location:login.php");
}
echo "This is also Protected";

echo "<hr>";
echo "<a href='logout.php'>Logout</a>";
?>