<?php
$conn=mysqli_connect('localhost','root','','college');
if($conn)
{
    
    $user=$_POST['user'];
    $rnum=$_POST['rnum'];
    $query = "SELECT * FROM viewmark WHERE Name='$user' AND RegisterNumber='$rnum'";
    $result = mysqli_query($conn, $query);
    $check = mysqli_fetch_array($result);
    if(isset($check))
      {
        echo "<script type='text/javascript'>alert('Welcome Admin !!');location='sthome.php';</script>";
      }
    else
      {
         echo"<script type='text/javascript'>alert('Invalid UserName and Password !!');location='staff.php';</script>"; 
      }
       
}
else
{
    echo'Server Not Connected';
}
?>