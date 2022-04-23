<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard</title>
        <link rel="stylesheet" href="user_info-style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>  
</head>
<body>
    <input type="checkbox" id="check">
<header>
    <label for="check">
    <i class="fas fa-bars" id="sidebar_btn"></i>
</label>
<div class="left_area">
    <h3>Dashboard</h3></span></h3>
</div>
<div class="right_area">
    <a href="#" class="logout_btn">Logout</a>
</div>
</header>

<div class="mobile_nav">
<div class="nav_bar">
<img src="admin.png" class="mobile_profile_image" alt="">
<i class="fa fa-bars nav_btn"></i>
</div>
<div class="mobile_nav_items">
    <a href="dashboard.php"><i class="fas fa-car"></i><span>Vehicles</span></a>
    <a href="addvehicle.php"><i class="fas fa-plus-square"></i><span>Add Vehicles</span></a>
    <a href="#"><i class="fas fa-book"></i><span>Bookings</span></a>
    <a href="user_info.php"><i class="fas fa-user"></i><span>Users</span></a>
    <a href="messages.php"><i class="fas fa-comment"></i><span>Messages</span></a>
    <a href="#"><i class="fas fa-user-cog"></i><span>Admins</span></a>
</div>
</div>

<div class="sidebar">
    <div class="profile_info">
        <img src="admin.png" class="profile_image" alt="admin">
        <h4>Admin</h4>
</div>
<a href="dashboard.php"><i class="fas fa-car"></i><span>Vehicles</span></a>
    <a href="addvehicle.php"><i class="fas fa-plus-square"></i><span>Add Vehicles</span></a>
    <a href="#"><i class="fas fa-book"></i><span>Bookings</span></a>
    <a href="user_info.php"><i class="fas fa-user"></i><span>Users</span></a>
    <a href="messages.php"><i class="fas fa-comment"></i><span>Messages</span></a>
    <a href="#"><i class="fas fa-user-cog"></i><span>Admins</span></a>

</div>
<div class="content">

</div>

<script type="text/javascript">
    $(document).ready(function(){
        $('.nav_btn').click(function(){
            $('.mobile_nav_items').toggleClass('active');

        });
    });
    </script>
</body>
</html>