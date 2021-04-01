<?php
//session_start();
include('processlogin.php');
if (!isset($_SESSION['email'])) {
    $_SESSION['msg1'] = "You have to log in first";
    header('location: login.php');
}
?>
<!doctype html>
<html lang="en">



<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href=login.css>
    <!------ Include the above in your HEAD tag ---------->
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <p style="color:red;"><?php echo $_SESSION['msg1']; ?><?php echo $_SESSION['msg1'] = ""; ?></p>
                <form action="processpassword.php" name="chngpwd" method="post" onSubmit="return valid();">
                    <a href="#" class="nav-item nav-link" aria-disabled="true"><?php echo $_SESSION['email']; ?> </a>
                    <label>Current Password</label>
                    <div class="form-group pass_show">
                        <input type="password" class="form-control" name="password" placeholder="Current Password">
                    </div>
                    <label>New Password</label>
                    <div class="form-group pass_show">
                        <input type="password" class="form-control" name="password1" placeholder="New Password">
                    </div>
                    <label>Confirm Password</label>
                    <div class="form-group pass_show">
                        <input type="password" class="form-control" name="password2" placeholder="Confirm Password">
                    </div>
                    <a href="homepage.php">Back</a>
                    <input type="submit" name="Submit" value="Change Passowrd" />
            </div>
            </form>
        </div>
    </div>

    <script>
        function valid() {
            if (document.chngpwd.password.value == "") {
                alert("Old Password Filed is Empty !!");
                document.chngpwd.password.focus();
                return false;
            } else if (document.chngpwd.password1.value == "") {
                alert("New Password Filed is Empty !!");
                document.chngpwd.password1.focus();
                return false;
            } else if (document.chngpwd.password2.value == "") {
                alert("Confirm Password Filed is Empty !!");
                document.chngpwd.password2.focus();
                return false;
            } else if (document.chngpwd.npwd.value != document.chngpwd.cpwd.value) {
                alert("Password and Confirm Password Field do not match  !!");
                document.chngpwd.password2.focus();
                return false;
            }
            return true;
        }
    </script>





</body>

</html>