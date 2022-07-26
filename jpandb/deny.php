<?php
    include('dbconn.php');

    
if(isset($_GET['deny'])){
    
    $id=$_GET['deny'];

   
    $sqlhome0= "DELETE FROM `pending_register` where id='$id'";
    $result0 = $mysqli-> query($sqlhome0);
    header("location:admin_pendinglist.php");

    }
   


?>
		