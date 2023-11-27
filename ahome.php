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
                        <li><a href="ahome.php"><b>Home</b></a></li>
                        <li><a href="AddStaff.php"><b>AddStaff</b></a></li>
                        <li><a href="Show.php"><b>ShowStaff</b></a></li>
                        <li><a href="aabout.php"><b>About</b></a></li>
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