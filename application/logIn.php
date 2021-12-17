<?php
session_start();

if(isset($_COOKIE['agencia']) == true){
    $_SESSION['logIn'] = true;
    header("Location: main.php");
}else{
    header("Location: index.php");
}


?>