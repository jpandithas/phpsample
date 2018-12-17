<?php
/**
 * Date: 14-Dec-15
 * Time: 7:22 PM
 */
session_start();
if (empty($_SESSION['uname']))
{
    header("Location:login.php");
}

echo "<h1> VALID </h1>";

echo "<hr>";
echo "<a href='logout.php'>Logout</a>";
/*
$user = $_SESSION['uname'];
echo "<h2>Hello, $user </h2>";
$_SESSION['data'] = "<br>THIS IS SAVED TO SESSION!";
echo "CONTENT for AUTH Users <br>";
echo "<a href='valid2.php'>Visit Valid2 Page</a>";
echo "<hr>";
echo "<a href='logout.php'>Logout</a>";*/
?>