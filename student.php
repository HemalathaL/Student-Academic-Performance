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
            width: 460px;
            float: left;
            height: 70px;
            margin-left: 180px;
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
            margin-left: 70px;
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
        .abc
        {
            height: 34px;
            width: 185px;
            margin-left: 585px;
            border-radius: 23px;
        }
        .sub
        {
            height: 34px;
            width: 85px;
            border-radius: 23px;
        }
        .sub:hover
        {
            background-color: rgb(154,195,223);
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
                        <li><a href="stabout.php"><b>About</b></a></li>
                        <li><a href="index.php"><b>Logout</b></a></li>
                    </ul> 
                </div>
            </div>
                       <br><br>
            <center><p style="font-family: Arial;font-weight: bold;text-shadow:2px 2px red;font-size: 34px;">VIEW STUDENT MARKS</p></center>
            <br><br><br><br>
            <div class="box">
                <form action="stshowmark.php" method="POST">
                <label style="font-family: Arial;font-weight: bold;font-size:24px;margin-left: 520px;">Student Register Number</label>
                <br><br><br><br>
                <input type="text" placeholder=" Enter Register Number" required="Please Enter your Register Number" name="rnum" class="abc">    
                <br><br><br><br>
                <center><input type="Submit" value="Submit"name="submit"class="sub"></center>
            </form>
            </div>
        </div>
        </body>
</html>