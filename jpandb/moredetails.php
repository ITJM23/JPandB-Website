<?php
include('dbconn.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="moredetails.css">
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
        <li><a href="project_listnew.html">HOME</a></li>
            <li><a href="about.php">ABOUT US</a></li>
            <li><a href="contact_us.php">CONTACT US</a></li>

        </ul>
        </div>

        

    </div>
    
    <div class="container">
        <div class="left">
            <?php
            if(isset($_GET['moredetails'])){
             $more=$_GET['moredetails'];
            $sqlhome= "SELECT *  FROM `projects` WHERE id = '$more';";
            $result = $mysqli-> query($sqlhome) or die($mysqli->error);;

            while($row = $result -> fetch_assoc()){
                
                echo "<div class='center'>";
                echo "<span class='name'>".$row['name']."</span><br>";
                echo "<span class='developer'>".$row['developer']."</span>";
                echo "</div>";
                
                $filepath = "image_db/" . $row['image'];
                echo "<img src=".$filepath." class='img' />";


                echo "<div class='line'></div>";

                if ($row['floor_area'] != null ){
                    echo "<div class='part'>Floor Area</div>";
                    echo "<span class='details'>".$row['floor_area']."</span>";
                }
                if ($row['lot_range'] != null ){
                    echo "<div class='part'>Lot range</div>";
                    echo "<span class='details'>".$row['lot_range']."</span>";
                }
                if ($row['price_range'] != null ){
                    echo "<div class='part'>Price range</div>";
                    echo "<span class='details'>".$row['price_range']."</span>";
                }
                if ($row['location'] != null ){
                    echo "<div class='part'>Location</div>";
                    echo "<span class='details'>".$row['location']."</span>";
                }
                if ($row['Amenities'] != null ){
                    echo "<div class='part'>Amenities</div>";
                    echo "<span class='details'>".$row['Amenities']."</span>";
                }

            }


         }

            ?>
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