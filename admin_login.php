<?php
    if(isset($_SESSION['isAdmin']) and $_SESSION['isAdmin'] === True) {
        echo "<script>alert('Already Logged!');</script>";
        echo "<script>location.href='./index.php'</script>";
    }    
?>
<!DOCTYPE html>
<html>
<?php require("./inc/head.php"); ?>
<body>
    <div class="sidenav">
        <div class="login-main-text">
            <h2>Admin<br> Login Page</h2>
        </div>
    </div>
    <div class="main">
        <div class="login-form">
            <form action="./admin_login_system.php" method="POST">
                <div class="form-group">
                    <label>아이디</label>
                    <input type="text" class="form-control" name="username" placeholder="아이디">
                </div>
                <div class="form-group">
                    <label>비밀번호</label>
                    <input type="password" class="form-control" name="password" placeholder="비밀번호">
                </div>
                <br>
                <button type="submit" class="btn btn-black">로그인</button>
            </form>
        </div>
    </div>
</body>

</html>