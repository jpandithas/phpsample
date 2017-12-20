<?php
/**
 * Date: 22-Nov-17
 * Time: 7:33 PM
 */
session_start();

if (empty($_SESSION['uid']))
{
    header("Location: login.html");
}

var_dump($_SESSION);

echo "<h2>VALID!!!</h2>";

echo "Hello :".$_SESSION['uname']."!";

echo "<br><a href='logout.php'>Logout</a>";

echo "<br>";

$input = '<p>Test  \' OR 1=1  paragraph.</p><!-- Comment --> <a href="#fragment">Other text</a>';

echo str_replace(" ", "", htmlspecialchars(strip_tags($input)));


?>