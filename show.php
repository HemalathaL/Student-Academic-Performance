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
                width: 450px;
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
                        <li><a href="ahome.php"><b>Home</b></a></li>
                        <li><a href="AddStaff.php"><b>AddStaff</b></a></li>
                        <li><a href="show.php"><b>ViewStaffs</b></a></li>
                         <li><a href="aabout.php"><b>About</b></a></li>
                        <li><a href="index.php"><b>Logout</b></a></li>
                    </ul> 
                </div>
            </div>
            <br><br>
            <center><p style="font-family: Arial;font-weight: bold;text-shadow:2px 2px red;font-size: 28px;">SHOW STAFF</p></center>
            <br><br>
            <?php
            $conn=mysqli_connect('localhost','root','','college');
            if($conn)
            {
                 //echo 'Server Connected';
                $query="SELECT Username,Location,MobileNumber,Country,Email FROM addstaff";
                $result=mysqli_query($conn,$query);
                $num_row=  mysqli_num_rows($result);
                if($num_row>0)
                {
                      echo '<table class="box">';
                      echo '<th> USERNAME </th>';
                      echo '<th> LOCATION </th>';
                      echo '<th> MOBILE NUMBER </th>';
                      echo '<th> COUNTRY </th>';
                      echo '<th> EMAIL </th>';
                      while ($row=mysqli_fetch_assoc($result))
                        {
                           echo'<tr>';
                            echo '<td>'.$row['Username'].'</td>';
                            echo '<td>'.$row['Location'].'</td>';
                            echo '<td>'.$row['MobileNumber'].'</td>';
                            echo '<td>'.$row['Country'].'</td>';
                            echo '<td>'.$row['Email'].'</td>';
                          echo'</tr>';
                        }
               echo'</table>';
                }
            }
            ?>
        </div>
        </body>
</html>