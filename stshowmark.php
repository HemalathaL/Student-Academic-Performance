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
            margin-left: 78px;
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
            padding: 20px;
            text-align: center;
            border-bottom: 1px solid #ddd;
            
        }
        
        th
        {
            background-color: #1B98E08C;
            text-align: center;
        }
        tr
        {
            text-align: center;
        }
        tr:hover
        {
            background-color: #1B98E01A;
            transform: scale(1.01);
            /*text-align: center;*/
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
    if($rnum == "5A001")
    {
        $query="select * from viewmark where RegisterNumber='5A001'";
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
    elseif($rnum == "5A002")
    {
        $query="select * from viewmark where RegisterNumber='5A002'";
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
    elseif($rnum == "5A003")
    {
        $query="select * from viewmark where RegisterNumber='5A003'";
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
    elseif($rnum == "5A004")
    {
        $query="select * from viewmark where RegisterNumber='5A004'";
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
    elseif($rnum == "5A005")
    {
        $query="select * from viewmark where RegisterNumber='5A005'";
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
    elseif($rnum == "5A006")
    {
        $query="select * from viewmark where RegisterNumber='5A006'";
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
    elseif($rnum == "5A007")
    {
        $query="select * from viewmark where RegisterNumber='5A007'";
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
    elseif($rnum == "5A008")
    {
        $query="select * from viewmark where RegisterNumber='5A008'";
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
    elseif($rnum == "5A009")
    {
        $query="select * from viewmark where RegisterNumber='5A009'";
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
    elseif($rnum == "5A010")
    {
        $query="select * from viewmark where Name='5A010'";
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
    elseif($rnum == "5A011")
    {
        $query="select * from viewmark where RegisterNumber='5A011'";
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
    elseif($rnum == "5A012")
    {
        $query="select * from viewmark where RegisterNumber='5A012'";
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
        echo "<script value='text/javascript'>alert('Invalid Register Number !!');location='student.php';</script>";
    }
}
?>