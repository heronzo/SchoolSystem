<?php
session_start();


if(isset($_SESSION['usr_id'])) {
    header("Location: ../index.php");
}



include_once '../config/dbconnect.php';

//set validation error flag as false
$error = false;

//check if form is submitted
if (isset($_POST['signup'])) {
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
    
    //username can contain only alpha characters and space
    if (!preg_match("/^[a-zA-Z]+$/",$username)) {
        $error = true;
        $username_error = "username must contain alphabets only";
    }




    if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
        $error = true;
        $email_error = "Please Enter Valid Email ID";
    }


    if(strlen($password) < 6) {
        $error = true;
        $password_error = "Your password should have a minimum of 6 characters";
    }

    if(strlen($password) > 16) {
        $error = true;
        $password_error = "Your password should not exceed 16 characters";
    }

/*

    if (!preg_match("/^[a-zA-Z]+$/",$password)) {
        $error = true;
        $password_error = "Password must contain alphabets";
    }

    */

    if($password != $cpassword) {
        $error = true;
        $cpassword_error = "The Password and the Confirm Password fields don't match";
    }
    if (!$error) {
        if(mysqli_query($con, "INSERT INTO users(username,email,password) VALUES('" . $username . "', '" . $email . "', '" . md5($password) . "')")) {
            $successmsg = "Successfully Registered! <a href='login.php'>Click here to Login</a>";
        } else {
            $errormsg = "Error in registering...Please try again later!";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Registration Script</title>
    <meta content="width=device-width, initial-scale=1.0" username="viewport" >
    <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css" />
</head>
<body>

<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <!-- add header -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Word Financial Regulatory Agencies</a>
        </div>
        <!-- menu items -->
        <div class="collapse navbar-collapse" id="navbar1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="login.php">Login</a></li>
                <li class="active"><a href="register.php">Sign Up</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4 well">
            <form role="form" action="register.php" method="post" username="signupform">
                <fieldset>
                    <legend>Sign Up</legend>

                    <div class="form-group">
                        <label for="username">username</label>
                        <input type="text" name="username" placeholder="Enter User username" required value="<?php if($error) echo $username; ?>" class="form-control" />
                        <span class="text-danger"><?php if (isset($username_error)) echo $username_error; ?></span>
                    </div>
                    
                    <div class="form-group">
                        <label for="username">Email</label>
                        <input type="text" name="email" placeholder="Email" required value="<?php if($error) echo $email; ?>" class="form-control" />
                        <span class="text-danger"><?php if (isset($email_error)) echo $email_error; ?></span>
                    </div>

                    <div class="form-group">
                        <label for="username">Password</label>
                        <input type="password" name="password" placeholder="Password" required class="form-control" />
                        <span class="text-danger"><?php if (isset($password_error)) echo $password_error; ?></span>
                    </div>

                    <div class="form-group">
                        <label for="username">Confirm Password</label>
                        <input type="password" name="cpassword" placeholder="Confirm Password" required class="form-control" />
                        <span class="text-danger"><?php if (isset($cpassword_error)) echo $cpassword_error; ?></span>
                    </div>

                    <div class="form-group">
                        <input type="submit" name="signup" value="Sign Up" class="btn btn-primary" />
                    </div>
                </fieldset>
            </form>
            <span class="text-success"><?php if (isset($successmsg)) { echo $successmsg; } ?></span>
            <span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-md-offset-4 text-center">    
        Already Registered? <a href="login.php">Login Here</a>
        </div>
    </div>
</div>
<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>