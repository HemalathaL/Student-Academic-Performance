<?php
  $conn=mysqli_connect('localhost','root','','college');
  if($conn)
  {
     $user=$_POST['user'];
     $pass=$_POST['pass'];  
     $query = "SELECT * FROM addstaff WHERE Username='$user' AND Password='$pass'";
     $result = mysqli_query($conn, $query);
     $check = mysqli_fetch_array($result);
    if(isset($check))
        {
           echo "<script type='text/javascript'>alert('Welcome Admin !!');location='shome.php';</script>";
        }
        else
        {
           header("Location:staff.php"); 
        }
  }
?>