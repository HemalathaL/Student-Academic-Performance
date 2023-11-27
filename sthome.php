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
            height: 73px;
            margin-left: 140px;
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
            <br>
            <div class="img">
            </div>
            <br>
            <div class="content">
                <p>
                        <footer> <small>&copy; Copyright 2021, hemainfo1997@gmail.com . All rights reserved</small> </footer> 
                </p>
            </div>
        </div>
        </body>
</html>