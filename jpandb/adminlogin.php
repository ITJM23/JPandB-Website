<?php
include('adminlog_process.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="adminlogin.css">
</head>
<body>
    <div class="container">
    <div class="left">

    </div>
    
    
    <div class="right">
        <div class="headeronly"><p class="HEADER">JPand B Admin Login</p></div>
        <div class="loginform">
        
        <form method="POST">
        <input type="text" class="textf" placeholder="USERNAME" name="username"><br>
        <input type="text" class="textf" placeholder="PASSWORD" name="password"><br>
        <input type="submit" value="login" name="submit" class="submit" name="submit">
        <p class="registerlink"><a href='adminregister.php'>Create Account</a></p>
        </form>

        </div>
        </div>
    </div>
    
</body>
</html>

<?php
