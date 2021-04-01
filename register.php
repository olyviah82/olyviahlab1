<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
    <title>Register Account</title>
    <link rel="stylesheet" href="registration.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="register.js"></script>
</head>

<body>
    <div class="signup-form">
        <form action="" method="post" id="register-form" class="form-horizontal">
            <div class="row">
                <div class="col-8 offset-4">
                    <h2>Sign Up</h2>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-4">Fullname</label>
                <div class="col-8">
                    <input type="text" class="form-control" name="fullname" id="fullname" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-4">Email Address</label>
                <div class="col-8">
                    <input type="email" class="form-control" name="email" id="email" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-4">City</label>
                <div class="col-8">
                    <input type="text" class="form-control" name="city" id="city" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-4">Password</label>
                <div class="col-8">
                    <input type="password" class="form-control" id="password" name="password" required="required">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-8 offset-4">

                    <input type="button" name="register" id="btn-submit" value="Sign up"
                        class="btn btn-primary btn-lg" />
                    <div id="result"></div>
                </div>
            </div>
        </form>
        <div class="text-center">Already have an account? <a href="login.php">Login here</a></div>
    </div>
    <script>
    function myFunction() {
        //  document.getElementById("register-form").reset();
    }
    </script>





</body>

</html>
