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
                height:365vh;
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
     
        .rnum
        {
            margin-right: 205px;
            height: 33px;
            border-radius: 23px;
        }
        #cars
        {
            height: 33px;
            border-radius: 23px;
        }
        .sub
        {
            height: 34px;
            width: 10%;
            border-radius: 23px;
            margin-left: 31px;
        }
        .sub:hover
        {
            background-color: rgb(154,195,223);
        }
        /**@media only screen and (max-width:768px)
        {
            table
            {
                width:90%;
            }   
            .main
            {
                width: 50%;
            }
        }**/
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
                        <li><a href="Viewmarks.php"><b>ViewMarks</b></a></li>
                        <li><a href="sabout.php"><b>About</b></a></li>
                        <li><a href="index.php"><b>Logout</b></a></li>
                    </ul> 
                </div>
            </div>
            <br><br>
            <center><p style="font-family: 'Courgette', cursive;font-weight: bold;text-shadow:2px 2px red;font-size: 28px;">SEND MARKS <br><br>
                <form action="newemail.php" method="POST">
                    <input type="text" placeholder="   Register Number" name="reg1" class="rnum">
                    <select id="cars" name="cars">
                      <option value="Quarterly">Python</option>
                      <option value="Halfyearly">CO</option>
                      <option value="Annual">Java</option>
                      <option value="Annual">Web Technology</option>
                    </select>
                    <br><br>
                    <input type="submit" value="Send Email" class="sub">
                 </form>
                </p></center>
              <br><br><br><br>
              
            <?php
            $conn=mysqli_connect('localhost','root','','college');
            $value=0;
            if($conn)
            {
                $query="select * from viewmark";
                $result=mysqli_query($conn,$query);
                $num_row=mysqli_num_rows($result);
                if($num_row>=0)
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

                    while($row=  mysqli_fetch_assoc($result))
                    {
      
                       echo '<tr>';
                       echo '<td>'.$row['Name'].'</td>';
                       echo '<td>'.$row['RegisterNumber'].'</td>';
                       echo '<td>'.$row['PythonLab'].'</td>';
                       echo '<td>'.$row['PythonTheory'].'</td>';
                       echo '<td>'.$row['CoLab'].'</td>';
                       echo '<td>'.$row['CoTheory'].'</td>';
                       echo '<td>'.$row['JavaLab'].'</td>';
                       echo '<td>'.$row['JavaTheory'].'</td>';
                       echo '<td>'.$row['WebLab'].'</td>';
                       echo '<td>'.$row['WebTheory'].'</td>';
                       echo '</tr>';
                
                    }
                  }
            }
            ?>
              
            </div>
        </body>
</html>
