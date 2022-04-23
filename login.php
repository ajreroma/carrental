<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
<link rel="stylesheet" type="text/css" href="login-style.css">
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
        <h2>Login</h2>
        <div class="form-container">
            <form>
                <div class="input-name">
                    <i class="fa fa-user"></i>
                    <input type="username" placeholder="Username" required class="text-name">
                </div>
                <div class="input-name">
                    <i class="fa fa-lock lock"></i>
                    <input type="password" placeholder="Password" class="text-name">
                </div>
                <div class="input-name">
                    <input class="button" type="submit" value="Login">
                </div>
                <div class="input-name">
                   <label>No account yet? Click <a href="reserve.php">here</a> to Sign Up</label>
                </div>
            </form>

        </div>
    </div>
</header>
</body>
</html>