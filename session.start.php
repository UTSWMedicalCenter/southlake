<?php
session_start();
if (isset($_SESSION['username'])) { // if already login
//check within database
$UserName = $_SESSION['username'];
}
?>