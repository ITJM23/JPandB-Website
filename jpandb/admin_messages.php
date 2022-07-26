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
    <title>Document</title>
    <link rel="stylesheet" href="admin_messages.css">
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

    <div class="main">
        <div class="tablecontainer">
            <div class="headeronly">
            <p class="HEADER">Clients Messages</p>
            </div>


            <?php
             $sqlhome= "SELECT * FROM messages;";
             $result = $mysqli-> query($sqlhome);
             
             while($row = $result -> fetch_assoc()){
             echo"<div class='list'>";
             echo $row['name'];
             echo"<br><span class='details'>" . $row['email'] ."</span>";
             echo"<br><span class='details'>" . $row['contact'] ."</span>";
             echo "<div class='line'></div>";
             echo"<br><span class='details'> Subject : " . $row['subject'] ."</span><br>";
             echo $row['message'];
             echo"</div>";
             }


             ?>

        </div>
    </div>