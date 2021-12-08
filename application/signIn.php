<?php
session_start();
$_SESSION['signIn'] = true;
header("Location: index.php");
?>