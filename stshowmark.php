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
                width:350px;
                height:70px;
                float:left;

            }
            .logo
            {
                color: rgb(154,195,223);
                font-size: 22px;
                font-family: arial;
                padding-left: 18px;
                float: left ;
                padding-top: 25px;
                font-weight: bold;
            }
            .menu
            {
                width: 500px;
                float: left;
                height: 70px;
                margin-left: 100px;
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
                font-size: 20px;
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
                        <li><a href="sthome.php"><b>Home</b></a></li>
                        <li><a href="student.php"><b>ShowMarks</b></a></li>
                        <li><a href="download.php"><b>Download as PDF</b></a></li>
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
    $rnum=$_POST['rnum'];
        $query="select * from viewmark where RegisterNumber='$rnum'";
        $result=mysqli_query($conn,$query);
        $num_row=  mysqli_num_rows($result);
        if($num_row>0)
        {
            echo'<table class= "box">';
                    echo '<th>Name</th>';
                    echo '<th>Register Number</th>';
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
         echo "<script value='text/javascript'>alert('Invalid Register Number !!');location='student.php';</script>";
    }

?>
            
            
            
            
   