<?php
    
    error_reporting(0);
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
    <link rel="stylesheet" href="adminupload_image.css">
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

    <form id="uploadForm" action="" method="post"  enctype= "multipart/form-data">

    <input type="file" name="fileToUpload" class="file"><br>
    <input type="text" name="name" placeholder="name" class="textf"><br>
    <input type="text" name="developer" placeholder="Developer" class="textf"><br>
    <input type="text" name="floorarea" placeholder="Floor area" class="textf"><br>
    <input type="text" name="lotrange" placeholder="lot range" class="textf"><br>
    <input type="text" name="pricerange" placeholder='price range' class="textf"><br>
    <input type="text" name="location" placeholder='location' class="textf"><br>
    <input type="text" name="amenities" placeholder='Amenities' class="textf"><br>
    <input type="submit" name="submit" value="Submit" class="submit"><br />
    </form>


    <?php
  
    $target_dir = "image_db/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $image = $_FILES["fileToUpload"]["name"]; //theeeee imaaaaaaaaaage
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
       $name= $_POST['name'];
       $developer= $_POST['developer'];
       $floorarea= $_POST['floorarea'];
       $lotrange= $_POST['lotrange'];
       $pricerange= $_POST['pricerange'];
       $location= $_POST['location'];
       $amenities= $_POST['amenities'];

       $result=mysqli_query($mysqli,"INSERT into projects values ('','$image','$name','$floorarea','$lotrange','$pricerange','$location','$developer','$amenities')");

      $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
      if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
      } else {
        echo "File is not an image.";
        $uploadOk = 0;
      }
    }
    
    
    // Check if file already exists
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    
    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 500000) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
      echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
      $uploadOk = 0;
    }
    
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
      } else {
        echo "Sorry, there was an error uploading your file.";
      }
    }
    
    ?>
    </div>


</body>
</html>