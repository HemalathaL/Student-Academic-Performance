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
            <br>
            <div class="img">
            </div>
            <br>
            <div class="content">
                <p>
                    This Student Academic Performance System provides an easy way to students in searching the details
                    of their academic attendance report and marks/percentage details . All the details of student’s
                    attendance and marks are added by the Teachers and HOD's. It has 3 Modules namely Student, Teacher and Admin. 
                    Students are asked to register and then login, fills the academic details,view attendance, marks . Teachers can login,
                    approve students, Add Students marks, Upload attendance . HOD can login, manage teachers report, events, they can view
                    attendance and academic details and manage notice. Basically, this system can help to maintain and manage the records
                    of students, teachers ,attendance and more.
                </p>
            </div>
        </div>
    </body>
</html>
