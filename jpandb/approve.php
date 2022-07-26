<?php
    include('dbconn.php');

    
if(isset($_GET['approve'])){
    
    $id=$_GET['approve'];
    $sqlhome= "SELECT *  FROM `pending_register` WHERE id='$id';";


    $result = $mysqli-> query($sqlhome);

    while($row = $result -> fetch_assoc()){

    $fullname=$row['fullname'];
    $username=$row['username'];
    $password=$row['password'];
    $position=$row['position'];

        
    $result=mysqli_query($mysqli,"INSERT into admin_accounts values ('','$fullname','$username','$password','$position')");
    
    $sqlhome0= "DELETE FROM `pending_register` where id='$id'";
    $result0 = $mysqli-> query($sqlhome0);
    header("location:admin_pendinglist.php");

    }
   
}

?>
		