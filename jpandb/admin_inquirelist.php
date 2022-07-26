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
    <link rel="stylesheet" href="admin_inquirelist.css">
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


    <div class="main3">
    <div class="tablecontainer">
    <form method="POST">
            <input type="submit" name="submit" value="clear list" class="submit">
    </form>

    
        <br>
        <div class="headeronly">
        <p class="HEADER">INQUIRE LIST</p>
        </div>


    <?php
        $sqlhome= "SELECT * FROM inquirelist;";
        $result = $mysqli-> query($sqlhome);
        
        while($row = $result -> fetch_assoc()){
        echo"<div class='box'>";
        echo "<span class='date'>Date Inquired: ". $row['date'] ."</span><br>";
        echo "<div class='line'></div>";
        echo "<span class='gray'>Full Name: </span><br>";
        echo $row['fullname']."<br>";
        echo "<div class='line'></div>";
        echo "<span class='gray'>Email: </span><br>";
        echo $row['email']."<br>";
        echo "<div class='line'></div>";
        echo "<span class='gray'>Age: </span><br>";
        echo $row['age']."<br>";
        echo "<div class='line'></div>";
        echo "<span class='gray'>Occupation: </span><br>";
        echo $row['occupation']."<br>";
        echo "<div class='line'></div>";
        echo "<span class='gray'>Contact Number: </span><br>";
        echo $row['contactnumber']."<br>";
        echo "<div class='line'></div>";
        echo "<span class='gray'>Property: </span><br>";
        echo $row['property']."<br>";
        echo "<div class='line'></div>";
        echo "<span class='gray'>Location: </span><br>";
        echo $row['location']."<br>";
        echo "<div class='line'></div>";
        echo "<span class='gray'>Day of Tripping: </span><br>";
        echo $row['day']."<br>";
        echo "<div class='line'></div>";
        echo "<span class='gray'>Time Preffered on Tripping</span><br>";
        echo $row['time']."<br>";

        echo"</div>";
        
        }
    ?>

    </div>

    </div>

    <?php
    if(isset($_POST['submit'])){
        $sqlhome0= "DELETE FROM `inquirelist`";
        $result0 = $mysqli-> query($sqlhome0);
    }
    ?>