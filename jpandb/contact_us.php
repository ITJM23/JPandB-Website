<?php
    include('dbconn.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="contact_us.css">
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

    <div class="main">

        <div class="left">
            <p id="HEAD">CONTACT US</p><br>
            <p id="subhead">Email us and keep upto date with our latest house and lot & condominium property.</p><br>
            <p class="contactdetails">4200 Batangas City</p><br>
            <p class="contactdetails">09230826836 & 09171306848</p><br>
            <p class="contactdetails">teo.jpandb@gmail.com</p><br>
        </div>



        <div class="right">
            <div class="form" method="POST">
                <form method="POST">
                <input type="text" class="textf" placeholder="Your name" name="name"><br>
                <input type="text" class="textf" placeholder="EMAIL" name="email"><br>
                <input type="text" class="textf" placeholder="Contact number" name="contact"><br>
                <input type="text" class="textf" placeholder="Subject of Message" name="subject"><br>
                <textarea name="message" id="texta" cols="30" rows="10" placeholder="Message" ></textarea><br>
                <input type="submit" class="submit" name="submit">
                </form>
            </div>
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
    </div>




</body>
</html>

<?php
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $contact=$_POST['contact'];
        $subject=$_POST['subject'];
        $message=$_POST['message'];

        $result=mysqli_query($mysqli,"INSERT into messages values ('','$name','$email','$contact','$subject','$message')");
    }
?>



  