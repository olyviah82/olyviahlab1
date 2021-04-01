<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <title>Employee.Blue Collar Services</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <script type='text/javascript' src='js/jquery-3.2.1.min.js'></script>
    <script type='text/javascript' src='login.js'></script>
    <link rel="stylesheet" href=login.css>
    <link rel="stylesheet" href=register.css>



    <!-- Bootstrap core CSS -->
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- <style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }
    </style> -->


    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
</head>


<body class="text-center">

    <main class="form-signin">

        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <form action="" id="login_form" method="post">
                    <img class="mb-4" src="logo.jpg" alt="" width="72" height="57">
                    <h1 class="h3 mb-3 fw-normal">user Signin</h1>

                    <label for="email" class="visually-hidden">Email address</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="Email address"
                        required autofocus>
                    <label for="password" class="visually-hidden">Password</label>
                    <input type="password" id="password" name="password" class="form-control" placeholder="Password"
                        required>
                    <div class="checkbox mb-3">
                        <label>
                            <input type="checkbox" value="remember-me"> Remember me
                        </label>
                    </div>
                    <input class="w-100 btn btn-lg btn-primary" value="Signin" name="login" type="submit" />
                    <span class="text-danger align-middle" id="errorMsg"></span>
                    <p>Don't have an account ? <a href="registration.php">Create Account</a></p>
                    <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
                </form>
            </div>

        </div>

    </main>



</body>

</html>