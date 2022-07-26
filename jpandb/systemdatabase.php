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
    <title>Logs</title>
    <link rel="stylesheet" href="systemdatabase.css">
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
            <li><a href="#">Client messages</a></li>
            <li><a href="admin_messages.php">Client messages</a></li>
            <li></li>
            <li></li>
            <li><a href="admin_logout.php?logout">Log out</a></li>

        </ul>
        </div>

        

    </div>


    <div class="container">
        <form method="POST">
        <input type="submit" name="inquirelist" value="clear Inquire list" class="submit"><br>
        <input type="submit" name="registration" value="clear Registration list" class="submit"><br>
        <input type="submit" name="clientmessages" value="clear Client Messages" class="submit"><br>
        <input type="submit" name="loghistory" value="clear Login History" class="submit"><br>
            </form>
    </div>


    <?php
            if(isset($_POST['inquirelist'])){
                $sqlhome0= "DELETE FROM `inquirelist`";
                $result0 = $mysqli-> query($sqlhome0);
            }

            if(isset($_POST['registration'])){
                $sqlhome0= "DELETE FROM `pending_register`";
                $result0 = $mysqli-> query($sqlhome0);
            }

            if(isset($_POST['clientmessages'])){
                $sqlhome0= "DELETE FROM `messages`";
                $result0 = $mysqli-> query($sqlhome0);
            }

            if(isset($_POST['loghistory'])){
                $sqlhome0= "DELETE FROM `logs`";
                $result0 = $mysqli-> query($sqlhome0);
            }
    ?>