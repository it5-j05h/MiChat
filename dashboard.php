<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="form">
        <p>Hey, <?php echo $_SESSION['username']; ?>! ID Number: <?php echo $_SESSION['id']; ?></p>
        <p>You are in user dashboard page.</p>
        <p><a href="logout.php">Logout</a></p>
    </div>


</body>
</html>
