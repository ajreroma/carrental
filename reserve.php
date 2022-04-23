<?php
    include('config.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
<link rel="stylesheet" type="text/css" href="reserve-style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
<header class="header">
    <nav class="navbar navbar-style">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#micon">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                <a href=""><img class="logo" src=""></a>
            </div>
            <div class="collapse navbar-collapse" id="micon">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php">Home</a></li>
                <li><a href="vehicles.php">Vehicles</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="contact.php">Contact Us</a></li>
            </ul>
        </div>
        </div>
    </nav>
    <div class="wrapper">
        <h2>Sign Up Form</h2>
        <div class="form-container">
            <form method="POST">
            <?php
            if(isset($_POST['register'])) {
                $errors = array();
                $firstname = $_POST['firstname'];
                $lastname =  $_POST['lastname'];
                $username =  $_POST['username'];
                $email =  $_POST['email'];
                $address = $_POST['address'];
                $phonenumber =  $_POST['phonenumber'];
                $password = $_POST['password'];
                $confirmPW = $_POST['confirmPW'];

                $accountQuery = conn()->query('SELECT * FROM users WHERE username=\''.conn()->real_escape_string($username).'\'');
                if($accountQuery->num_rows > 0)
                    $errors[] = 'Account already exist!';
                if($password != $confirmPW)
                    $errors[] = 'Password did not match!';

                if(count($errors) > 0) {
                    echo '<div class="alert alert-danger">';
                    echo implode('<br/>', $errors);
                    echo '</div>';
                } else {
                    conn()->query('INSERT INTO users(firstname, lastname, username, email, address, phonenumber, password) VALUES(
                        \''.conn()->real_escape_string($firstname).'\',             
                        \''.conn()->real_escape_string($lastname).'\',
                        \''.conn()->real_escape_string($username).'\',
                        \''.conn()->real_escape_string($email).'\',
                        \''.conn()->real_escape_string($address).'\',
                        \''.conn()->real_escape_string($phonenumber).'\',
                        \''.conn()->real_escape_string(md5($password)).'\'
                    )');
                    echo '<div class="alert alert-success">Account has been created successfully!</div>';
                }
            }
?>                
                <div class="input-name">
                    <i class="fa fa-user lock"></i>
                    <input type="text" placeholder="First Name" name="firstname" class="name">
                    <span>
                        <i class="fa fa-user lock"></i>
                        <input type="text" placeholder="Last Name" name="lastname" class="name">
                    </span>
                </div>
                <div class="input-name">
                    <i class="fa fa-user"></i>
                    <input type="username" placeholder="Username" name="username" required class="text-name">
                </div>
                <div class="input-name">
                    <i class="fa fa-envelope email"></i>
                    <input type="email" placeholder="Email" name="email" required class="text-name">
                </div>
                <div class="input-name">
                    <i class="fa fa-address-card"></i>
                    <input type="text" placeholder="Full Address" name="address" required class="text-name">
                </div>
                <div class="input-name">
                    <i class="fa fa-phone"></i>
                    <input type="text" placeholder="Phone Number" name="phonenumber" required class="text-name">
                </div>
                <div class="input-name">
                    <i class="fa fa-lock lock"></i>
                    <input type="password" placeholder="Password" name="password" class="text-name">
                </div>
                <div class="input-name">
                    <i class="fa fa-lock lock"></i>
                    <input type="password" placeholder="Re-type Password" name="confirmPW" class="text-name">
                </div>
                <div class="input-name">
                    <input class="button" type="submit" name="register" value="Register">
                </div>
                <div class="input-name">
                   <label>Already have an account? Click <a href="login.php">here</a> to login</label>
                </div>
            </form>
        </div>
    </div>
</header>
</body>
</html>