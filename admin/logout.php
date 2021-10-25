<?php
include './database.inc.php';
session_destroy();
header('location:login.php');
?>