<?php
session_start();

//if(isset($_SESSION['usr_id'])!="") {
   // header("Location: ../index.php");
//}



include_once '../config/dbconnect.php';

$error = false;

//check if form is submitted
if (isset($_POST['update'])) 

{

    $opassword = mysqli_real_escape_string($con, $_POST['opassword']);
    $npassword = mysqli_real_escape_string($con, $_POST['npassword']);
    $ncpassword = mysqli_real_escape_string($con, $_POST['ncpassword']);

    $username=$_SESSION['usr_name'];


if($npassword != $ncpassword) {
        $error = true;
        $cpassword_error = "The new Password and the Confirm new Password fields don't match";
    }


if(strlen($npassword) < 6) {
        $error = true;
        $password_error = "Your password should have a minimum of 6 characters";
    }

    if(strlen($npassword) > 16) {
        $error = true;
        $password_error = "Your password should not exceed 16 characters";
    }




    $result = mysqli_query($con, "UPDATE users SET password = '" . md5($npassword) . "' WHERE username = '" . $username. "' ");

    $success_msg="password successfully updated";
        header("Location: ../index.php");
    } 

    

?>

<!DOCTYPE html>
<html>
<head>
    <title>Word Financial Regulatory Agencies: Changing User Pasword</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" >
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
                <li class="active"><a href="login.php">Login</a></li>
                <li><a href="register.php">Sign Up</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4 well">
            <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="loginform">
                <fieldset>
                    <legend>Login</legend>
                    
                    <div class="form-group">
                        <label for="name">Old Password</label>
                        <input type="password" name="opassword" placeholder="Your old password" required class="form-control" />
                    </div>


                    <div class="form-group">
                        <label for="name">New Password</label>
                        <input type="password" name="npassword" placeholder="Your new password" required class="form-control" />
                    </div>


                    <div class="form-group">
                        <label for="name">Confirm New Password</label>
                        <input type="password" name="ncpassword" placeholder="Confirm New Password" required class="form-control" />
                    </div>

                    <div class="form-group">
                        <input type="submit" name="update" value="Update" class="btn btn-primary" />
                    </div>
                </fieldset>
            </form>
            <span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-md-offset-4 text-center">    
        New User? <a href="register.php">Sign Up Here</a>
        </div>
    </div>
</div>

<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>