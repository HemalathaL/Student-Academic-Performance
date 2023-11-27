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
    
       input[type=text],[type=number],[type=email]
        {
            width: 19%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-left: 23px;
    }
        .sub
        {
            height: 34px;
            width: 185px;
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
                        <li><a href="Viewmarks.php"><b>ViewMarks</b></a></li>
                        <li><a href="sabout.php"><b>About</b></a></li>
                        <li><a href="index.php"><b>Logout</b></a></li>
                    </ul> 
                </div>
            </div>
            <br><br>
            <center><p style="font-family: Arial;font-weight: bold;text-shadow:2px 2px red;font-size: 34px;">ADD STUDENT</p></center>
            <br><br>
            <div class="data">
                <form action="studentreg.php"method="POST">
                <br><br>
                <label style="font-family: Arial;font-weight: bold;font-size:24px;margin-left: 100px;">Student Name</label>
                <input type="text" placeholder=" Enter Student name"required="Please Enter your Student Name"name="sname">
                 &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                <label style="font-family: Arial;font-weight: bold;font-size:24px;">Register Number</label>
                 &nbsp;&nbsp;&nbsp;
                <input type="text" placeholder=" Enter Register Number"required="Please Enter your Register Number"name="rnum"> 
                <br><br><br><br>
                <label style="font-family: Arial;font-weight: bold;font-size:24px;margin-left: 100px;">Mobile Number</label>
                <input type="text" placeholder=" Enter Mobile Number"required="Please Enter your Mobile Number"name="num">&nbsp;&nbsp;  
                <label style="font-family: Arial;font-weight: bold;font-size:24px;margin-left: 40px;">Class</label>
                &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
                <input type="text" placeholder=" Enter Class"required="Please Enter your Class"name="class">                
                <br><br><br><br>
                <label style="font-family: Arial;font-weight: bold;font-size:24px;margin-left: 100px;">Email</label>&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
                <input type="email" placeholder=" Enter Email"required="Please Enter your Email"name="email">                
                <br><br><br>
                <center><input type="Submit" value="Submit"name="submit"class="sub"></center>
            </form>
            </div>
            </div>
        </body>
</html>