<?php
/**
 * Created by PhpStorm.
 * User: shidan
 * Date: 9/16/16
 * Time: 1:39 PM
 */
session_start();
unset($_SESSION['stausername']);
session_unset();
session_destroy();

header("Location: index.php");
exit;
?>