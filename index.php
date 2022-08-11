<?php //require("./inc/session_check.php"); ?>
<!DOCTYPE html>
<html>
<?php require("./inc/head.php"); ?>

<body>
    <?php require("./inc/sidenav.php"); ?>
    <div class="main">
        <?php
            if($_GET['url'] === "account_management") { include("./account_management.php"); } 
            else if($_GET['url'] === "log_management") { include("./log_management.php"); }
        ?>
    </div>
    <?php require("./inc/include_js.php"); ?>
</body>

</html>