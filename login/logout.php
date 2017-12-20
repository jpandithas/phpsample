<?php
/**
 * Date: 27-Nov-17
 * Time: 7:18 PM
 */

session_start();

session_destroy();

header("Location: login.html");

?>