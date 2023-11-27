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
        
        .sub
        {
            height: 34px;
            width: 185px;
        }
        input[type=text],[type=password],[type=email]
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
                        <li><a href="show.php"><b>ShowStaffs</b></a></li>
                        <li><a href="aabout.php"><b>About</b></a></li>
                        <li><a href="index.php"><b>Logout</b></a></li>
                    </ul> 
                </div>
            </div>
            <br><br>
            <center><p style="font-family: Arial;font-weight: bold;text-shadow:2px 2px red;font-size: 34px;">ADD STAFF</p></center>
            <div class="data">
            <form action="staffreg.php"method="POST">
                <br><br>
                <label style="font-family: Arial;font-weight: bold;font-size:24px;margin-left: 100px;">UserName</label>
                <input type="text" placeholder=" Enter Username"required="Please Enter your UserName"name="uname">
                &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                <label style="font-family: Arial;font-weight: bold;font-size:24px;">Mobile Number</label>
                <input type="text" placeholder=" Enter Mobile Number"required="Please Enter your Mobile Number"name="mob"> 
                <br><br><br><br>
                <label style="font-family: Arial;font-weight: bold;font-size:24px;margin-left: 100px;">Location</label>
                 &nbsp;&nbsp;&nbsp;
                <input type="text" placeholder=" Enter Location"required="Please Enter your Location"name="loc"> 
                 &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                <label style="font-family: Arial;font-weight: bold;font-size:24px;">Password</label>
                 &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
                <input type="password" placeholder=" Enter Password"required="Please Enter your Password"name="pass">                
                <br><br><br><br>
                <label style="font-family: Arial;font-weight: bold;font-size:24px;margin-left: 100px;">Country</label>
                 &nbsp;&nbsp;&nbsp;
                <input type="text" placeholder=" Enter Country"required="Please Enter your Country"name="coun">                
                 &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                <label style="font-family: Arial;font-weight: bold;font-size:24px;">Email</label>
                 &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;
                <input type="email" placeholder=" Enter Email"required="Please Enter your Email"name="email">                
                <br><br><br><br><br><br>
                <center><input type="Submit" value="Register"name="submit"class="sub"></center>
            </form>
            </div>
            </div>
        </body>
</html>