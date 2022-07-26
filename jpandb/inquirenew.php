<?php
    include('dbconn.php');
?>


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
    $date= date("m.d.Y");


    $result=mysqli_query($mysqli,"INSERT into inquirelist values ('','$email','$fn','$age','$occ','$cn','$prop','$pf','$ts','$time','$date')");
    header("location:offerlist.php");
 }
 ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="inquirenew.css">
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
        <div class="main">
            
            <form method="POST">
                    <input type="text" class="textf" placeholder="EMAIL" name="email">
                    <input type="text" class="textf" placeholder="FULL NAME" name="fullname">
                    <input type="text" class="textf" placeholder="AGE" name="age">
                    <input type="text" class="textf" placeholder="OCCUPATION" name="occupation">
                    <input type="text" class="textf" placeholder="CONTACT NUMBER" name="contactnumber">

                
                    <select name="property" class="select">
                        <option selected disabled>PROPERTY</option>
                        <option value="any">--Any--</option>
                        <option value="Camella Homes">Camella Homes</option>
                        <option value="Lessandra">Lessandra</option>
                        <option value="Mercedes Homes">Mercedes Homes</option>
                        <option value="Avida Settings">Avida Settings</option>
                        <option value="Demeter Land">Demeter Land</option>
                        <option value="Active Group">Active Group</option>
                    </select>

                    <select name="prefferedlocation" class="select">
                        <option selected disabled>PREFFERED LOCATION</option>
                        <option value="Any">--Any--</option>
                        <option value="Batangas">Batangas</option>
                        <option value="Quezon">Quezon</option>
                        <option value="Cavite">Cavite</option>
                    </select>
                      
                      <br>

                    <select name="trippingschedule" class="select">
                        <option selected disabled>TRIPPING SCHEDULE</option>
                        <option value="Any">--Any--</option>
                        <option value="Monday">Monday</option>
                        <option value="Tuesday">Tuesday</option>
                        <option value="Wednesday">Wednesday</option>
                        <option value="Thursday">Thursday</option>
                        <option value="Friday">Friday</option>
                        <option value="Saturday">Saturday</option>
                        <option value="Sunday">Sunday</option>
                    </select>

                    <select name="time" class="select">
                        <option selected disabled>TIME</option>
                        <option value="Any">--Any--</option>
                        <option value="9:00 AM">9:00 AM</option>
                        <option value="10:00 AM">10:00 AM</option>
                        <option value="11:00 AM">11:00 AM</option>
                        <option value="12:00 PM">12:00 PM</option>
                        <option value="1:00 PM">1:00 PM</option>
                        <option value="2:00 PM">2:00 PM</option>
                        <option value="3:00 PM">3:00 PM</option>
                        <option value="4:00 PM">4:00 PM</option>
                        
                    </select>

                    <br>

                    <input type="submit" class="submit" name="submit"><br>
                    <a href="offerlist.php" class="skipbutton">Skip</a>

                    <p class="note">NOTE: Your Personal data will not be used outside of our services.<br>
                                    Please fill up the contact number or Email Field so we can contact you.</p>
                </form>

                
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





