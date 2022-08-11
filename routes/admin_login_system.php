<?php
    require("../inc/db.php");
    session_start();
    $username = $_POST['username'];
    $password = $_POST['passwor'];
    $login_query = "select * from users where username='{$username}' and password='{$password}'";
    
?>