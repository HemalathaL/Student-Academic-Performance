<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <style>
       *
            {
                margin: 0;
                padding: 0;
            }
            .main
            {
                width: 100%;
                background-position: center;
                background-size: cover;
                background-image:url("dbg.jpg");
                height:105vh;
            }
            .navbar
            {
                width: 100%;
                height:75px;
                margin: auto;

            }
            .icon
            {
                width:300px;
                height:70px;
                float:left;


            }
            .logo
            {
                color: rgb(154,195,223);
                font-size: 18px;
                font-family: arial;
                padding-left: 18px;
                float: left ;
                padding-top: 25px;
                font-weight: bold;
            }
            .menu
            {
                width: 350px;
                float: left;
                height: 70px;
                
            }
            ul
            {
                float: left;
                display:flex;
                justify-content: center;
                align-items: center;
            }
            ul li
            {
                list-style: none;
                padding:20px;
                margin-top: 7px;
                font-size: 16px;
                margin-left: 10px;
            } 
            ul li a
            {
                text-decoration: none;
                color: white;
                font-family: Arial;
                font-weight: bold;
                transition: 0.4s ease-in-out;    
            }
            ul li a:hover
            {
                color: rgb(154,195,223);
            }
        .img
        {
            background-position: center;
            background-image: url("bg.jpg");
            background-size: cover;
            height: 435px;
            
        }
        .content
        {
            font-family:Arial;
            color:white;
            font-size: 23px;
            text-align: center;
            padding :55px;
        }
        table
          {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
             width: 800px;
            height: 100px;
           margin-left: 85px;
          }
        .box td, .box th 
        {
          border: 1px solid #ddd;
          padding: 8px;
        }

        .box tr:nth-child(even)
        {
            background-color: #f2f2f2;
        }

        .box tr:hover 
        {
            background-color: #ddd;
        }

        .box th 
        {
          padding-top: 12px;
          padding-bottom: 12px;
          text-align: left;

          color: white;
           background-color: #1B98E08C;
           
        }
        </style>
    <body>
        <div class="main">
            <div class="navbar">    
                <div class="icon">
                    <p class="logo">Student Academic Performance</p>
                </div>
                <div class="menu">
                    <ul>
                        <li><a href="shome.php"><b>Home</b></a></li>
                        <li><a href="AddStudent.php"><b>AddStudent</b></a></li>
                        <li><a href="stviewmarks.php"><b>SendMarks</b></a></li>
                        <li><a href="Viewmarks.php"><b>ViewStudent</b></a></li>
                        <li><a href="index.php"><b>Logout</b></a></li>
                    </ul> 
                </div>
            </div>
            <br><br>
            <center><p style="font-family: Arial;font-weight: bold;text-shadow:2px 2px red;font-size: 28px;">SHOW MARKS</p></center>
<?php
$conn=mysqli_connect('localhost','root','','college');
if($conn)
{
    $sname=$_POST['sname'];
        $query="select * from viewmark where Name='$sname'";
        $result=mysqli_query($conn,$query);
        $num_row=  mysqli_num_rows($result);
        if($num_row>0)
        {
            echo'<table class= "box">';
                    echo '<th>NAME</th>';
                    echo '<th>REGISTER NUMBER</th>';
                    echo '<th>Python Lab</th>';
                    echo '<th>Python Theory</th>';
                    echo '<th>CO Lab</th>';
                    echo '<th>CO Theory</th>';
                    echo '<th>Java Lab</th>';
                    echo '<th>Java Theory</th>';
                    echo '<th>Web Lab</th>';
                    echo '<th>Web Theory</th>';
            while ($row=  mysqli_fetch_assoc($result))
            {
                 echo '<tr>';
                 echo '<td>'.$row['Name'].'</td>';
                 echo '<td>'.$row['RegisterNumber'].'</td>';
                 echo '<td>'.$row['PythonLab'].'</td>';
                 echo '<td>'.$row['PythonTheory'].'</td>';
                 echo '<td>'.$row['CoLab'].'</td>';
                 echo '<td>'.$row['COTheory'].'</td>';
                 echo '<td>'.$row['JavaLab'].'</td>';
                 echo '<td>'.$row['JavaTheory'].'</td>';
                 echo '<td>'.$row['WebLab'].'</td>';
                 echo '<td>'.$row['WebTheory'].'</td>';
                  echo '</tr>';
            }
            echo '</table>';

        }
        
    }
   
    else
    {
         echo "<script value='text/javascript'>alert('Invalid Name !!');location='Viewmarks.php';</script>";
    }

?>