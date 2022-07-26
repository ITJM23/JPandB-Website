<?php
    include('dbconn.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="adminregister.css">
</head>
<body>
    <div class="container">
    <div class="left">

    </div>
    
    
    <div class="right">
        <div class="headeronly"><p class="HEADER">Admin Registration</p></div>
        <div class="loginform">
        
        
        <form method="POST">
        <input type="text" class="textf" placeholder="FULL NAME" name="fullname"><br>
        <input type="text" class="textf" placeholder="USERNAME" name="username"><br>
        <input type="text" class="textf" placeholder="PASSWORD" name="password"><br>


        <select name="admin_position" class="select">
        <option selected disabled>Position</option>
        <option value="head_admin">Head Admin</option>
        <option value="admin">Admin</option>
        </select><br>

        <input type="submit" value="Register" name="submit" class="submit">
        
        </form>
        <p class="link"><a href='adminlogin.php'>Return to Login page</a></p>
        <p class="footnote">Note : You cant Login to your account until a Head admin approves your registration</p>
        </div>
        </div>
    </div>
    
</body>
</html>


<?php
    if (isset($_POST['submit'])){
        $fullname=$_POST['fullname'];
        $username=$_POST['username'];
        $password=$_POST['password'];
        $position=$_POST['admin_position'];

        $result=mysqli_query($mysqli,"INSERT into pending_register values ('','$fullname','$username','$password','$position')");
    }
?>