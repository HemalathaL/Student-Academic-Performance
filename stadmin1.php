<?php
$conn=mysqli_connect('localhost','root','','college');
if($conn)
{
    
    $user=$_POST['user'];
    $rnum=$_POST['rnum'];
    if($user == "Priya" && $rnum == "5A001")
    {
       echo "<script type='text/javascript'>alert('Welcome Priya !!');location='sthome.php';</script>";
    }
    elseif($user == "Tanya" && $rnum == "5A002")
    {
        echo"<script type='text/javascript'>alert('Welcome Tanya !!');location='sthome.php';</script>";
    }
     elseif($user == "Priyanka" && $rnum == "5A003")
    {
        echo"<script type='text/javascript'>alert('Welcome Priyanka !!');location='sthome.php';</script>";
    }
     elseif($user == "Divya" && $rnum == "5A004")
    {
        echo"<script type='text/javascript'>alert('Welcome Divya !!');location='sthome.php';</script>";
    }
     elseif($user == "Tanvi" && $rnum == "5A005")
    {
        echo"<script type='text/javascript'>alert('Welcome Tanvi !!');location='sthome.php';</script>";
    }
     elseif($user == "Ishita" && $rnum == "5A006")
    {
        echo"<script type='text/javascript'>alert('Welcome Ishita !!');location='sthome.php';</script>";
    }
     elseif($user == "Vani" && $rnum == "5A007")
    {
        echo"<script type='text/javascript'>alert('Welcome Vani !!');location='sthome.php';</script>";
    }
     elseif($user == "Anjali" && $rnum == "5A008")
    {
        echo"<script type='text/javascript'>alert('Welcome Anjali !!');location='sthome.php';</script>";
    }
     elseif($user == "Shreya" && $rnum == "5A009")
    {
        echo"<script type='text/javascript'>alert('Welcome Shreya !!');location='sthome.php';</script>";
    }
     elseif($user == "Riya" && $rnum == "5A010")
    {
        echo"<script type='text/javascript'>alert('Welcome Riya !!');location='sthome.php';</script>";
    }
     elseif($user == "Sneha" && $rnum == "5A011")
    {
        echo"<script type='text/javascript'>alert('Welcome Sneha !!');location='sthome.php';</script>";
    }
     elseif($user == "Aishwarya" && $rnum == "5A012")
    {
        echo"<script type='text/javascript'>alert('Welcome Aishwarya !!');location='sthome.php';</script>";
    }
    else
    {
        echo"<script type='text/javascript'>alert('Invalid UserName and Password !!');location='stadmin.php';</script>";
    }
}
else
{
    echo'Server Not Connected';
}
?>