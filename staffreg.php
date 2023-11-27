<?php
$conn=mysqli_connect('localhost','root','','college');
if($conn)
{
    $user= $_POST['uname'];
    $loc= $_POST['loc'];
    $mob= $_POST['mob'];
    $pass= $_POST['pass'];
    $coun= $_POST['coun'];
    $email= $_POST['email'];
    $query="INSERT INTO `addstaff`(`UserName`, `Location`, `Country`, `MobileNumber`, `Password`, `Email`) VALUES ('$user','$loc','$coun','$mob','$pass','$email')";
    $result=mysqli_query($conn,$query);
    if($result)
    {
        echo "<script type='text/javascript'>alert('Data Added!!'); location='ahome.php';</script>";
         //echo "<script type='text/javascript'>alert('Welcome Admin !!');location='ahome.php';</script>";
    }
}
?>