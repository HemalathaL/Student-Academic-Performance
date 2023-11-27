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
            height:128vh;
        }
        .navbar
        {
            width: 1200px;
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
            width: 450px;
            float: left;
            height: 70px;
            margin-left: 250px;
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
            margin-left: 40px;
            margin-top: 27px;
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
            font-family: verdana,Geneva,Tahoma,sans-serif;
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%,-50%);
            border-collapse: collapse;
            width: 1100px;
            height: 200px;
            box-shadow:2px 2px 12px;
            border: 2px solid #bdc3c7;
        }
        th td
        {
            padding: 12px;
            text-align: center;
            border-bottom: 1px solid #ddd;
            
        }
        tr
        {
            text-align: center;
        }
        th
        {
            background-color: #1B98E08C;
            text-align: center;
        }
        tr:hover
        {
            background-color: #1B98E01A;
            transform: scale(1.01);
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
            <center><p style="font-family: Arial;font-weight: bold;text-shadow:2px 2px red;font-size: 28px;">SHOW STAFF</p></center>
<?php
$conn=mysqli_connect('localhost','root','','college');
if($conn)
{
    $sname=$_POST['sname'];
    if($sname == "Priya")
    {
        $query="select * from viewmark where Name='Priya'";
        $result=mysqli_query($conn,$query);
        $num_row=  mysqli_num_rows($result);
        if($num_row>0)
        {
            echo'<table>';
            echo '<th>NAME</th>';
            echo '<th>REGISTER NUMBER</th>';
            echo '<th>EXAM</th>';
            echo '<th>ENGLISH</th>';
            echo '<th>TAMIL</th>';
            echo '<th>MATHS</th>';
            echo '<th>SCIENCE</th>';
            echo '<th>SOCIAL</th>';
            echo '<th>RESULT</th>';
            echo '<th>TOTAL</th>';
            while ($row=  mysqli_fetch_assoc($result))
            {
                echo '<tr>';
                echo '<td>'.$row['Name'].'</td>';
                echo '<td>'.$row['RegisterNumber'].'</td>';
                echo '<td>'.$row['Exam'].'</td>';
                echo '<td>'.$row['English'].'</td>';
                echo '<td>'.$row['Tamil'].'</td>';
                echo '<td>'.$row['Maths'].'</td>';
                echo '<td>'.$row['Science'].'</td>';
                echo '<td>'.$row['Social'].'</td>';
                echo '<td>'.$row['Result'].'</td>';
                echo '<td>'.$row['Total'].'</td>';
                echo '</tr>';
            }
            echo '</table>';

        }
        
    }
    elseif($sname == "Tanya")
    {
        $query="select * from viewmark where Name='Tanya'";
        $result=mysqli_query($conn,$query);
        $num_row=  mysqli_num_rows($result);
        if($num_row>0)
        {
            echo'<table>';
            echo '<th>NAME</th>';
            echo '<th>REGISTER NUMBER</th>';
            echo '<th>EXAM</th>';
            echo '<th>ENGLISH</th>';
            echo '<th>TAMIL</th>';
            echo '<th>MATHS</th>';
            echo '<th>SCIENCE</th>';
            echo '<th>SOCIAL</th>';
            echo '<th>RESULT</th>';
            echo '<th>TOTAL</th>';
            while ($row=  mysqli_fetch_assoc($result))
            {
                echo '<tr>';
                echo '<td>'.$row['Name'].'</td>';
                echo '<td>'.$row['RegisterNumber'].'</td>';
                echo '<td>'.$row['Exam'].'</td>';
                echo '<td>'.$row['English'].'</td>';
                echo '<td>'.$row['Tamil'].'</td>';
                echo '<td>'.$row['Maths'].'</td>';
                echo '<td>'.$row['Science'].'</td>';
                echo '<td>'.$row['Social'].'</td>';
                echo '<td>'.$row['Result'].'</td>';
                echo '<td>'.$row['Total'].'</td>';
                echo '</tr>';
            }
            echo '</table>';

        }
        
    }
    elseif($sname == "Priyanka")
    {
        $query="select * from viewmark where Name='Priyanka'";
        $result=mysqli_query($conn,$query);
        $num_row=  mysqli_num_rows($result);
        if($num_row>0)
        {
            echo'<table>';
            echo '<th>NAME</th>';
            echo '<th>REGISTER NUMBER</th>';
            echo '<th>EXAM</th>';
            echo '<th>ENGLISH</th>';
            echo '<th>TAMIL</th>';
            echo '<th>MATHS</th>';
            echo '<th>SCIENCE</th>';
            echo '<th>SOCIAL</th>';
            echo '<th>RESULT</th>';
            echo '<th>TOTAL</th>';
            while ($row=  mysqli_fetch_assoc($result))
            {
                echo '<tr>';
                echo '<td>'.$row['Name'].'</td>';
                echo '<td>'.$row['RegisterNumber'].'</td>';
                echo '<td>'.$row['Exam'].'</td>';
                echo '<td>'.$row['English'].'</td>';
                echo '<td>'.$row['Tamil'].'</td>';
                echo '<td>'.$row['Maths'].'</td>';
                echo '<td>'.$row['Science'].'</td>';
                echo '<td>'.$row['Social'].'</td>';
                echo '<td>'.$row['Result'].'</td>';
                echo '<td>'.$row['Total'].'</td>';
                echo '</tr>';
            }
            echo '</table>';

        }
        
    }
    elseif($sname == "Tanvi")
    {
        $query="select * from viewmark where Name='Tanvi'";
        $result=mysqli_query($conn,$query);
        $num_row=  mysqli_num_rows($result);
        if($num_row>0)
        {
            echo'<table>';
            echo '<th>NAME</th>';
            echo '<th>REGISTER NUMBER</th>';
            echo '<th>EXAM</th>';
            echo '<th>ENGLISH</th>';
            echo '<th>TAMIL</th>';
            echo '<th>MATHS</th>';
            echo '<th>SCIENCE</th>';
            echo '<th>SOCIAL</th>';
            echo '<th>RESULT</th>';
            echo '<th>TOTAL</th>';
            while ($row=  mysqli_fetch_assoc($result))
            {
                echo '<tr>';
                echo '<td>'.$row['Name'].'</td>';
                echo '<td>'.$row['RegisterNumber'].'</td>';
                echo '<td>'.$row['Exam'].'</td>';
                echo '<td>'.$row['English'].'</td>';
                echo '<td>'.$row['Tamil'].'</td>';
                echo '<td>'.$row['Maths'].'</td>';
                echo '<td>'.$row['Science'].'</td>';
                echo '<td>'.$row['Social'].'</td>';
                echo '<td>'.$row['Result'].'</td>';
                echo '<td>'.$row['Total'].'</td>';
                echo '</tr>';
            }
            echo '</table>';

        }   
    }
    elseif($sname == "Ishita")
    {
        $query="select * from viewmark where Name='Ishita'";
        $result=mysqli_query($conn,$query);
        $num_row=  mysqli_num_rows($result);
        if($num_row>0)
        {
            echo'<table>';
            echo '<th>NAME</th>';
            echo '<th>REGISTER NUMBER</th>';
            echo '<th>EXAM</th>';
            echo '<th>ENGLISH</th>';
            echo '<th>TAMIL</th>';
            echo '<th>MATHS</th>';
            echo '<th>SCIENCE</th>';
            echo '<th>SOCIAL</th>';
            echo '<th>RESULT</th>';
            echo '<th>TOTAL</th>';
            while ($row=  mysqli_fetch_assoc($result))
            {
                echo '<tr>';
                echo '<td>'.$row['Name'].'</td>';
                echo '<td>'.$row['RegisterNumber'].'</td>';
                echo '<td>'.$row['Exam'].'</td>';
                echo '<td>'.$row['English'].'</td>';
                echo '<td>'.$row['Tamil'].'</td>';
                echo '<td>'.$row['Maths'].'</td>';
                echo '<td>'.$row['Science'].'</td>';
                echo '<td>'.$row['Social'].'</td>';
                echo '<td>'.$row['Result'].'</td>';
                echo '<td>'.$row['Total'].'</td>';
                echo '</tr>';
            }
            echo '</table>';

        }
        
    }
    elseif($sname == "Vani")
    {
        $query="select * from viewmark where Name='Vani'";
        $result=mysqli_query($conn,$query);
        $num_row=  mysqli_num_rows($result);
        if($num_row>0)
        {
            echo'<table>';
            echo '<th>NAME</th>';
            echo '<th>REGISTER NUMBER</th>';
            echo '<th>EXAM</th>';
            echo '<th>ENGLISH</th>';
            echo '<th>TAMIL</th>';
            echo '<th>MATHS</th>';
            echo '<th>SCIENCE</th>';
            echo '<th>SOCIAL</th>';
            echo '<th>RESULT</th>';
            echo '<th>TOTAL</th>';
            while ($row=  mysqli_fetch_assoc($result))
            {
                echo '<tr>';
                echo '<td>'.$row['Name'].'</td>';
                echo '<td>'.$row['RegisterNumber'].'</td>';
                echo '<td>'.$row['Exam'].'</td>';
                echo '<td>'.$row['English'].'</td>';
                echo '<td>'.$row['Tamil'].'</td>';
                echo '<td>'.$row['Maths'].'</td>';
                echo '<td>'.$row['Science'].'</td>';
                echo '<td>'.$row['Social'].'</td>';
                echo '<td>'.$row['Result'].'</td>';
                echo '<td>'.$row['Total'].'</td>';
                echo '</tr>';
            }
            echo '</table>';

        }
        
    }
    elseif($sname == "Anjali")
    {
        $query="select * from viewmark where Name='Anjali'";
        $result=mysqli_query($conn,$query);
        $num_row=  mysqli_num_rows($result);
        if($num_row>0)
        {
            echo'<table>';
            echo '<th>NAME</th>';
            echo '<th>REGISTER NUMBER</th>';
            echo '<th>EXAM</th>';
            echo '<th>ENGLISH</th>';
            echo '<th>TAMIL</th>';
            echo '<th>MATHS</th>';
            echo '<th>SCIENCE</th>';
            echo '<th>SOCIAL</th>';
            echo '<th>RESULT</th>';
            echo '<th>TOTAL</th>';
            while ($row=  mysqli_fetch_assoc($result))
            {
                echo '<tr>';
                echo '<td>'.$row['Name'].'</td>';
                echo '<td>'.$row['RegisterNumber'].'</td>';
                echo '<td>'.$row['Exam'].'</td>';
                echo '<td>'.$row['English'].'</td>';
                echo '<td>'.$row['Tamil'].'</td>';
                echo '<td>'.$row['Maths'].'</td>';
                echo '<td>'.$row['Science'].'</td>';
                echo '<td>'.$row['Social'].'</td>';
                echo '<td>'.$row['Result'].'</td>';
                echo '<td>'.$row['Total'].'</td>';
                echo '</tr>';
            }
            echo '</table>';

        }
        
    }
    elseif($sname == "Shreya")
    {
        $query="select * from viewmark where Name='Shreya'";
        $result=mysqli_query($conn,$query);
        $num_row=  mysqli_num_rows($result);
        if($num_row>0)
        {
            echo'<table>';
            echo '<th>NAME</th>';
            echo '<th>REGISTER NUMBER</th>';
            echo '<th>EXAM</th>';
            echo '<th>ENGLISH</th>';
            echo '<th>TAMIL</th>';
            echo '<th>MATHS</th>';
            echo '<th>SCIENCE</th>';
            echo '<th>SOCIAL</th>';
            echo '<th>RESULT</th>';
            echo '<th>TOTAL</th>';
            while ($row=  mysqli_fetch_assoc($result))
            {
                echo '<tr>';
                echo '<td>'.$row['Name'].'</td>';
                echo '<td>'.$row['RegisterNumber'].'</td>';
                echo '<td>'.$row['Exam'].'</td>';
                echo '<td>'.$row['English'].'</td>';
                echo '<td>'.$row['Tamil'].'</td>';
                echo '<td>'.$row['Maths'].'</td>';
                echo '<td>'.$row['Science'].'</td>';
                echo '<td>'.$row['Social'].'</td>';
                echo '<td>'.$row['Result'].'</td>';
                echo '<td>'.$row['Total'].'</td>';
                echo '</tr>';
            }
            echo '</table>';

        }
        
    }
    elseif($sname == "Riya")
    {
        $query="select * from viewmark where Name='Riya'";
        $result=mysqli_query($conn,$query);
        $num_row=  mysqli_num_rows($result);
        if($num_row>0)
        {
            echo'<table>';
            echo '<th>NAME</th>';
            echo '<th>REGISTER NUMBER</th>';
            echo '<th>EXAM</th>';
            echo '<th>ENGLISH</th>';
            echo '<th>TAMIL</th>';
            echo '<th>MATHS</th>';
            echo '<th>SCIENCE</th>';
            echo '<th>SOCIAL</th>';
            echo '<th>RESULT</th>';
            echo '<th>TOTAL</th>';
            while ($row=  mysqli_fetch_assoc($result))
            {
                echo '<tr>';
                echo '<td>'.$row['Name'].'</td>';
                echo '<td>'.$row['RegisterNumber'].'</td>';
                echo '<td>'.$row['Exam'].'</td>';
                echo '<td>'.$row['English'].'</td>';
                echo '<td>'.$row['Tamil'].'</td>';
                echo '<td>'.$row['Maths'].'</td>';
                echo '<td>'.$row['Science'].'</td>';
                echo '<td>'.$row['Social'].'</td>';
                echo '<td>'.$row['Result'].'</td>';
                echo '<td>'.$row['Total'].'</td>';
                echo '</tr>';
            }
            echo '</table>';

        }
        
    }
    elseif($sname == "Sneha")
    {
        $query="select * from viewmark where Name='Sneha'";
        $result=mysqli_query($conn,$query);
        $num_row=  mysqli_num_rows($result);
        if($num_row>0)
        {
            echo'<table>';
            echo '<th>NAME</th>';
            echo '<th>REGISTER NUMBER</th>';
            echo '<th>EXAM</th>';
            echo '<th>ENGLISH</th>';
            echo '<th>TAMIL</th>';
            echo '<th>MATHS</th>';
            echo '<th>SCIENCE</th>';
            echo '<th>SOCIAL</th>';
            echo '<th>RESULT</th>';
            echo '<th>TOTAL</th>';
            while ($row=  mysqli_fetch_assoc($result))
            {
                echo '<tr>';
                echo '<td>'.$row['Name'].'</td>';
                echo '<td>'.$row['RegisterNumber'].'</td>';
                echo '<td>'.$row['Exam'].'</td>';
                echo '<td>'.$row['English'].'</td>';
                echo '<td>'.$row['Tamil'].'</td>';
                echo '<td>'.$row['Maths'].'</td>';
                echo '<td>'.$row['Science'].'</td>';
                echo '<td>'.$row['Social'].'</td>';
                echo '<td>'.$row['Result'].'</td>';
                echo '<td>'.$row['Total'].'</td>';
                echo '</tr>';
            }
            echo '</table>';

        }
        
    }
    elseif($sname == "Aishwarya")
    {
        $query="select * from viewmark where Name='Aishwarya'";
        $result=mysqli_query($conn,$query);
        $num_row=  mysqli_num_rows($result);
        if($num_row>0)
        {
            echo'<table>';
            echo '<th>NAME</th>';
            echo '<th>REGISTER NUMBER</th>';
            echo '<th>EXAM</th>';
            echo '<th>ENGLISH</th>';
            echo '<th>TAMIL</th>';
            echo '<th>MATHS</th>';
            echo '<th>SCIENCE</th>';
            echo '<th>SOCIAL</th>';
            echo '<th>RESULT</th>';
            echo '<th>TOTAL</th>';
            while ($row=  mysqli_fetch_assoc($result))
            {
                echo '<tr>';
                echo '<td>'.$row['Name'].'</td>';
                echo '<td>'.$row['RegisterNumber'].'</td>';
                echo '<td>'.$row['Exam'].'</td>';
                echo '<td>'.$row['English'].'</td>';
                echo '<td>'.$row['Tamil'].'</td>';
                echo '<td>'.$row['Maths'].'</td>';
                echo '<td>'.$row['Science'].'</td>';
                echo '<td>'.$row['Social'].'</td>';
                echo '<td>'.$row['Result'].'</td>';
                echo '<td>'.$row['Total'].'</td>';
                echo '</tr>';
            }
            echo '</table>';
        }
    }
    else
    {
         echo "<script value='text/javascript'>alert('Invalid Name !!');location='Viewmarks.php';</script>";
    }
}
?>