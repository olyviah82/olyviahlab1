<?php
//session_start();
include('processlogin.php');
if (!isset($_SESSION['email'])) {
    $_SESSION['msg'] = "You have to log in first";
    header('location: login.php');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['email']);
    header("location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Bootstrap Navbar with Login Form in Dropdown</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet"
        id="bootstrap-css">
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <style>
    body {
        font-family: 'Varela Round', sans-serif;
    }

    .form-control {
        box-shadow: none;
        border-radius: 4px;
    }

    .navbar {
        background: #fff;
        padding-left: 16px;
        padding-right: 16px;
        border-bottom: 1px solid #dfe3e8;
        border-radius: 0;
    }

    .nav-link img {
        border-radius: 50%;
        width: 36px;
        height: 36px;
        margin: -8px 0;
        float: left;
        margin-right: 10px;
    }

    .navbar .navbar-brand {
        padding-left: 0;
        font-size: 20px;
        padding-right: 50px;
    }

    .navbar .navbar-brand b {
        color: #5c6ac4;
    }

    .navbar .form-inline {
        display: inline-block;
    }

    .navbar .navbar-nav {
        position: relative;
    }

    .navbar a,
    .navbar a:active {
        color: #888;
        font-size: 15px;
        background: transparent;
    }

    .search-box {
        position: relative;
    }

    .search-box input {
        padding-right: 35px;
        border-color: #dfe3e8;
        border-radius: 4px !important;
        box-shadow: none
    }

    .search-box .input-group-text {
        min-width: 35px;
        border: none;
        background: transparent;
        position: absolute;
        right: 0;
        z-index: 9;
        padding: 7px;
        height: 100%;
    }

    .search-box i {
        color: #a0a5b1;
        font-size: 19px;
    }

    .navbar .btn-primary,
    .navbar .btn-primary:active {
        color: #fff;
        background: #5c6ac4 !important;
        padding-top: 8px;
        padding-bottom: 6px;
        border-radius: 4px;
        vertical-align: middle;
        border: none;
        min-width: 120px;
        margin: 2px 0;
    }

    .navbar .btn-primary:hover,
    .navbar .btn-primary:focus {
        color: #fff;
        background: #5765c1 !important;
    }

    .navbar .action-buttons .dropdown-toggle::after {
        display: none;
    }

    .search-box .btn span {
        transform: scale(0.9);
        display: inline-block;
    }

    .navbar .nav-item i {
        font-size: 18px;
    }

    .navbar .dropdown-item i {
        font-size: 16px;
        min-width: 22px;
    }

    .navbar .dropdown-menu {
        border-radius: 1px;
        border-color: #e5e5e5;
        box-shadow: 0 2px 8px rgba(0, 0, 0, .05);
    }

    .navbar .navbar-nav .dropdown-menu a {
        padding: 8px 20px;
        line-height: normal;
    }

    .navbar .navbar-form {
        border: none;
    }

    .navbar .navbar-form-wrapper {
        padding: 0 15px;
    }

    .navbar .login-form label {
        color: #888;
        font-weight: normal;
    }

    .navbar .dropdown-menu.login-form {
        width: 280px;
        padding: 20px;
        left: auto;
        right: 0;
        font-size: 14px;
    }

    .navbar .navbar-nav .dropdown-menu.login-form a {
        padding: 0 !important;
        color: #5c6ac4;
        font-weight: normal;
    }

    .navbar .navbar-nav .dropdown-menu.login-form a:hover {
        text-decoration: underline;
    }

    .navbar .dropdown-menu.login-form .checkbox-inline {
        margin-top: 10px;
    }

    @media (min-width: 1200px) {
        .form-inline .input-group {
            width: 300px;
            margin-left: 30px;
        }
    }

    @media (max-width: 768px) {
        .navbar .dropdown-menu.login-form {
            width: 100%;
            padding: 10px 15px;
            background: transparent;
            border: none;
        }

        .navbar .form-inline {
            display: block;
        }

        .navbar .input-group {
            width: 100%;
        }

        .navbar .navbar-nav .btn-primary,
        .navbar .navbar-nav .btn-primary:active {
            display: block;
        }
    }
    </style>
    <script>
    // Prevent dropdown menu from closing when click inside the form
    $(document).on("click", ".navbar-right .dropdown-menu", function(e) {
        e.stopPropagation();
    });
    </script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a href="#" class="navbar-brand">Brand<b>Name</b></a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Collection of nav links, forms, and other content for toggling -->
        <div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
            <div class="navbar-nav">

                <a href="#" class="nav-item nav-link">Home</a>
                <a href="#" class="nav-item nav-link">About</a>
                <div class="nav-item dropdown">
                    <a href="#" data-toggle="dropdown" class="nav-item nav-link dropdown-toggle">Services</a>
                    <div class="dropdown-menu">
                        <a href="status.php" class="dropdown-item">status</a>

                    </div>
                </div>
                <a href="#" class="nav-item nav-link" aria-disabled="true"><?php echo $_SESSION['email']; ?> </a>
                <a href="homepage.php?logout='1'" class="nav-item nav-link active">logout</a>
                <a href="changepassword.php" class="nav-item nav-link">change password</a>

            </div>


        </div>
    </nav>
    <!-- body -->
    <div class="container" style="width:95%;">

        <!-- Display all Food from food table -->
        <?php

        include_once 'user.php';
        include_once './util.php';
        include_once 'dbconnect.php';
        $conn = new DBConnector();
        $pdo = $conn->connectToDB();


        $sql = "SELECT  COUNT(*) AS num FROM FOOD";
        $stmt = $pdo->prepare($sql);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);




        if ($row['num'] > 0) {
            $count = 0;
 
            while ($row = $result) {
                if ($count == 0)
                    echo "<div class='row'>";

        ?>
        <div class="col-md-3">

            <form method="post" action="cart.php?action=add&id=<?php echo $row["foodid"]; ?>">
                <div class="mypanel" align="center" ;>
                    <img src="<?php echo $row["images_path"]; ?>" class="img-responsive">
                    <h4 class="text-dark"><?php echo $row["name"]; ?></h4>
                    <h5 class="text-info"><?php echo $row["description"]; ?></h5>
                    <h5 class="text-danger">&#8377; <?php echo $row["prize"]; ?>/-</h5>
                    <h5 class="text-info">Quantity: <input type="number" min="1" max="25" name="quantity"
                            class="form-control" value="1" style="width: 60px;"> </h5>
                    <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>">
                    <input type="hidden" name="hidden_price" value="<?php echo $row["prize"]; ?>">

                    <input type="submit" name="add" style="margin-top:5px;" class="btn btn-success" value="Add to Cart">
                </div>
            </form>


        </div>

        <?php
                $count++;
                if ($count == 4) {
                    echo "</div>";
                    $count = 0;
                }
            }
            ?>

    </div>
    </div>
    <?php
        } else {
?>

    <div class="container">
        <div class="jumbotron">
            <center>
                <label style="margin-left: 5px;color: red;">
                    <h1>Oops! No food is available.</h1>
                </label>
                <p>Stay Hungry...! :P</p>
            </center>

        </div>
    </div>

    <?php

        }

?>

</body>

</html>
