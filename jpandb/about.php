<?php
    include('dbconn.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="about.css">
</head>
<body>

    <div class="navbar">
    <img src="logo.png" class="logo">
    <ul class="nav">
            <li class="inline"><a href="project_listnew.html">Home</a></li>
            <li class="inline"><a href="about.php">About</a></li>
            <li class="inline"><a href="contact_us.php">Contact Us</a></li>
            <li class="inline2"><a href="inquirenew.php">INQUIRE</a></li>
        </ul>


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
        <div class="main">
    
            <p class="title">VISION</p>
            <p class="texts">A leading brokerage in the region that provides quality real estate services through ethical & socially responsible practices.</p>
            <p class="title">MISSION</p>
            <p class="texts">The company's values teamwork as a path to insight and excellence in our work. The team of committed professionals embrace the following core values:<br><br>

                            <span class="bold">Quality</span>: We deliver only excellence and aim to exceed expectations in everything we do.<br><br>

                            <span class="bold">Integrity</span>: We conduct ourselves in the highest ethical standards, demonstrating honesty and fairness in every decision and action.<br><br>

                            <span class="bold">Agility</span>: We execute expeditiously to address our clients' needs.<br><br>

                            <span class="bold">Courage</span>: We make decisions and act in the best interests of our clients, even in the face of personal or professional adversity.<br><br>

                            <span class="bold">Respect and Trust</span>: We treat our clients and each other with dignity and respect at all times.<br><br>

                            <span class="bold">Fun</span>: We believe in having fun at work and with each other.</p>
        </div>

        <div class="main2">
            <div class="ads">
                <iframe frameborder="0" height="100%" width="100%" 
                src="https://www.youtube.com/embed/6AQPaSJOQ7o?autoplay=1" allow="autoplay">
              </iframe>
                
            </div>

        </div>

    </div><!-- container--> 
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
</div>


</body>
</html>





<?php
 if(isset($_POST["submit"])) {
    $email= $_POST['email'];
    $fn= $_POST['fullname'];
    $age= $_POST['age'];
    $occ= $_POST['occupation'];
    $cn= $_POST['contactnumber'];
    $prop= $_POST['property'];
    $pf= $_POST['prefferedlocation'];
    $ts= $_POST['trippingschedule'];
    $time= $_POST['time'];


    $result=mysqli_query($mysqli,"INSERT into inquirelist values ('','$email','$fn','$age','$occ','$cn','$prop','$pf','$ts','$time')");
    header("location:offerlist.php");
 }
 ?>