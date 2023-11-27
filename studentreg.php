<?php
$conn=mysqli_connect('localhost','root','','college');
$sname=$_POST['sname'];
$reg=$_POST['rnum'];
$num=$_POST['num'];
$class=$_POST['class'];
$email=$_POST['email'];
$query="insert into addstudent values('$sname','$reg','$num','$class','$email')";
$result=mysqli_query($conn,$query);
if($result)
{
    echo "<script value='text/javascript'>alert('Data Added !!');location='shome.php';</script>";
}
?>