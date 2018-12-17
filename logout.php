<?php
/**
 * Date: 14-Dec-15
 * Time: 8:45 PM
 */

session_start();
session_destroy();
header("Location:login.php");

?>