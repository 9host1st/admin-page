<?php
    session_start();
    if(!isset($_SESSION['isAdmin']) or $_SESSION['isAdmin'] !== True) {
        echo "<script>alert('Please Login First!');</script>";
        echo "<script>location.href='./admin_login.php'</script>";
    }
?>