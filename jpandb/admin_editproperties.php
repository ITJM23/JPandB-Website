<?php
    session_start();
    include('dbconn.php');
    include('admin_logout.php');
    

    if (isset($_SESSION['account'])) {

    }

    else
    {
        header("location:adminlogin.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin_editProperties</title>
    <link rel="stylesheet" href="admin_editproperties.css">
</head>
<body>
    <div class="navbar">
        <input type="checkbox" id="check">
        <label for="check">
        <i class="fas fa-bars" id='btn'>
            <div class="burger"></div>
            <div class="burger"></div>
            <div class="burger"></div>
        </i>
        <i class="fas fa-bars" id='cancel'>
            <div class="burger"></div>
            <div class="burger"></div>
            <div class="burger"></div>

        </i>
        </label>
        <div class="sidebar">
        <header>JP&B</header>
        <ul>
        <?php
                if ($_SESSION['account'] == 'head_admin') {
                   
                    echo '<li><a href="headadmin_settings.php">Head admin settings</a></li>';
                }
            

        ?>
            <li><a href="admin_editproperties.php">Edit Properties</a></li>
            <li><a href="admin_inquirelist.php">Inquire list</a></li>
            <li><a href="admin_messages.php">Client messages</a></li>
            <li><a href="#">Interested Clients</a></li>
            <li></li>
            <li></li>
            <li><a href="admin_logout.php?logout">Log out</a></li>

        </ul>
        </div>

        

    </div>

    <div class="container">
        <a href="adminupload_image.php"><div class="option">Add Property</div></a>
        <a href="admindelete_image.php"><div class="option">Delete Property</div></a>

    </div>




</body>
</html>