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
    <link rel="stylesheet" href="admindelete_image.css">
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
        <div class="searchbar">
            <form method="POST">
            <input type="text" class="text" placeholder="DELETE ID" name="id">
            <input type="submit" class="submit" placeholder="search" name="submit" value="DELETE">
            </form>
            <?php
                if(isset($_POST['submit'])){
                    $deleteid= $_POST['id'];

                    $sqlhome0= "DELETE FROM `projects` WHERE `projects`.`id` = $deleteid;";
                    $result0 = $mysqli-> query($sqlhome0);
                    echo "<span class='green'>Deleted ID no. " .$deleteid . "</span>";
                }
                
            ?>
            
        </div>






        <div class="list">
        
            <div class="square-container">

                    <?php

                        $sqlhome= "SELECT * FROM projects;";
                        $result = $mysqli-> query($sqlhome);

                        while($row = $result -> fetch_assoc()){
                            echo"<div class='box'>";   
                            echo"<div class='texts'>";
                            echo "<span class='red'>DELETE ID: " . $row['id'] . "</span><br>";
                            echo"<span class='projectname'>" . $row['name'] . "</span><br>";
                            echo"<p>Lot Range :</p>";
                            echo"<span class='details'>" . $row['lot_range'] . "</span>";
                            echo"<p>Price Range</p>";
                            echo"<span class='details'>" . $row['price_range'] . "</span>";
                            echo"<p>Location</p>";
                            echo"<span class='details'>" . $row['location'] . "</span>";
                            
                            echo $row['location'];
                            echo"</div>";
                            echo"<div class='image'>";
                            echo $row['image'];

                            

                            $filepath = "image_db/" . $row['image'];
                            echo "<img src=".$filepath." class='img' />";
                            echo"</div>";

                            echo"</div>";

                        }
                    ?>

            </div>



        </div>
        <br><br>

       
    </div>






    </div>


    <div class="footer">
        <div class="footer1">
            <p>JP and B Realty & General Services Inc</p>
            <p>Sell property to clients.</p>
        </div>

        <div class="footer2">
        <p>4200 Batangas City<br>09230826836 & 09171306848<br>teo.jpandb@gmail.com</p>
         </div>

    </div>

    <div class="footest">
        <p>Copyright &copy; JP and B Realty & General Services Inc 2020. All rights reserved.</p>


    </div>



</body>
</html>