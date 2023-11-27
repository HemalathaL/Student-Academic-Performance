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
            height:214vh;
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
                        <li><a href="Student.php"><b>ShowMarks</b></a></li>
                        <li><a href="download.php"><b>Download as PDF</b></a></li>
                        <li><a href="stabout.php"><b>About</b></a></li>
                        <li><a href="index.php"><b>Logout</b></a></li>
                    </ul> 
                </div>
            </div>
            <br><br>
            <center><p style="font-family: 'Courgette', cursive;font-weight: bold;text-shadow:2px 2px red;font-size: 28px;"> DOWNLOAD AS PDF <br><br>
                <form action="download1.php" method="POST">
                    <input type="text" placeholder="   Register Number" name="reg1" class="rnum">
                    <select id="cars" name="cars">
                      <option value="Quarterly">Quarterly</option>
                      <option value="Halfyearly">Half yearly</option>
                      <option value="Annual">Annual</option>
                    </select>
                    <br><br><br><br><br>
                    <input type="submit" value="Download as PDF" class="sub">
                 </form>
                </p></center>
              <br><br><br><br>
        </div>
        </body>
</html>