<html>
    <head>
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
            height:100vh;
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
        .login
        {
            border: 2px solid black;
            height: 450px;
            width: 410px;
            margin-left: 350px;
            margin-top: 30px;
            background-color: white;
            text-shadow: 3px 3px rgb(154,195,223);
            box-shadow: 5px 10px #888888;
        }
        .value
        {
            margin-left: 23px;
            text-shadow: none;
            
        }
        .large
        {
            height: 34px;
            width: 185px;
            margin-left: 34px;
            border-radius: 20%;
        }
        .sub:hover
        {
            background-color: rgb(154,195,223);
        }
        .sub
        {
             height: 34px;
            width: 185px;
            margin-left: 34px;
            border-radius: 20%; 
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
                        <li><a href="index.php"><b>Home</b></a></li>
                        <li><a href="admin.php"><b>Admin</b></a></li>
                        <li><a href="staff.php"><b>Staff</b></a></li>
                        <li><a href="stadmin.php"><b>Student</b></a></li>
                         <li><a href="aboutus.php"><b>About</b></a></li>
                    </ul> 
                </div>
            </div>
            <br>
            <div class="login"><br>
                <h1><center>Staff Login</center></h1><br><br><br>
                <div class="value">
                    <form action="Staff1.php" method="POST">
                    <b style="font-size: 22px;">UserName :</b>
                    <input type="text" placeholder="Enter UserName"required="Please Enter the field" name="user"class="large"><br><br><br><br><br>
                    <b style="font-size: 22px;">Password :</b>
                    <input type="password" placeholder="Enter Password"required="Please Enter the field"name="pass"class="large"><br><br><br><br><br>
                    <center><input type="Submit" value="Login"class="sub"></center>
                    </form>
                </div>
            </div>     
        </div>
    </body>
</html>

