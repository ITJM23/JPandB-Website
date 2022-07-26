<?php
include('dbconn.php');
session_start();

//log in ==============================================================================================
if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];

    if (empty($username) || empty($password)) {
        header("location:adminlogin.php");
    }
    else
    {
        $sql= "SELECT * from admin_accounts where username='$username' and password='$password'";
        $result = mysqli_query($mysqli, $sql);
        
        if (mysqli_fetch_assoc($result)) {
            //FETCH SINGLE DATAAAAAAAA
            $query="SELECT * FROM admin_accounts where username='$username'";
            $result2=mysqli_query($mysqli,$query);


            while ($row = $result2->fetch_assoc()) {
                date_default_timezone_set('Asia/Manila');
                $fullname= $row['fullname'];
                $username= $row['username'];
                $date= date("m.d.Y");
                $time= date("h:m");
                $position = $row['admin_position'];

                $result9=mysqli_query($mysqli,"INSERT into logs values ('','$fullname','$username','$date','$time')");
                $_SESSION['account']=$position;
               header("location:admin_inquirelist.php");
            }

        }
        else {
                header("location:adminlogin.php");
        }

    }
}
//log in ==============================================================================================s

?>