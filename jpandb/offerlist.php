<?php
    include('dbconn.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="offerlist.css">
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
        <div class="searchbar">
            <form method="POST">
            <input type="text" class="text" placeholder="Search" name="search">
            <input type="submit" class="submit" placeholder="search" name="submit" value="search">
            </form>
        </div>
        <div class="list">
        
            <div class="square-container">

                                <?php
                                    if(isset($_POST['submit'])){
                                    $loc=$_POST['search'];
                                    $sqlhome= "SELECT * FROM `projects` WHERE `location` = '$loc' OR `name` = '$loc' ORDER BY `location` ASC";
                                }
                                else{
                                    $sqlhome= "SELECT *  FROM `projects`;";
                                }

                                    $result = $mysqli-> query($sqlhome) or die($mysqli->error);;

                                    while($row = $result -> fetch_assoc()){
                                        echo"<div class='box'>";   
                                        echo"<div class='texts'>";
                                        echo"<span class='projectname'>" . $row['name'] . "</span><br>";
                                        echo"<span class='developer'>" . $row['developer'] . "</span><br>";
                                        echo"<div class='line'></div>";
                                        echo"<p>Lot Range :</p>";
                                        echo"<span class='details'>" . $row['lot_range'] . "</span>";
                                        echo"<p>Price Range</p>";
                                        echo"<span class='details'>" . $row['price_range'] . "</span>";
                                        echo"<br><br>";
                                        echo"<span class='details'><img src='icons/location_icon.png' width='30vh'>" . $row['location'] . "</span>";
                                        
                                        echo $row['location'];
                                        echo "<div class='centered'>";
                                        ?>
                                        <br><a class ="link" href="moredetails.php?moredetails=<?php echo $row["id"];?>">More Details></a>';

                                        <?php
                                        echo"</div>";
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

