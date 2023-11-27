<?php
$conn=mysqli_connect('localhost','root','','college');
if($conn)
{
   $rnum=$_POST['reg1'];
   $car=$_POST['cars']; 
   $query="select * from viewmark where RegisterNumber='$rnum' and Exam='$car'";
   $res=mysqli_query($conn,$query);
                   $row=  mysqli_fetch_assoc($res);
                   $approveremail=$row['Name'];
                   $approveremail1=$row['RegisterNumber'];
                   $approveremail2=$row[''];
                   $approveremail3=$row['English'];
                   $approveremail4=$row['Tamil'];
                   $approveremail5=$row['Maths'];
                   $approveremail6=$row['Science'];
                   $approveremail7=$row['Social'];
                   $approveremail8=$row['Result'];
                   $approveremail9=$row['Total'];
                   $approveremail10=$row['Email'];
                   $msg = " Name : $approveremail \n Register Number : $approveremail1 \n Exam : $approveremail2 \n English : $approveremail3 \n Tamil : $approveremail4 \n Maths : $approveremail5 \n Science : $approveremail6 \n Social : $approveremail7 \n Result : $approveremail8 \n Total : $approveremail9";
}
else
{
    
}
?>


<?php 
$conn= mysqli_connect('localhost','root','','college');
if($conn)
{
                $rnum=$_POST['reg1'];
                $car=$_POST['cars'];
                if($rnum == "5A001" && $car == "Quarterly")
                {
                   $query="select * from viewmark where RegisterNumber='5A001' and Exam='Quarterly'";
                   $res=mysqli_query($conn,$query);
                   $row=  mysqli_fetch_assoc($res);
                   $approveremail=$row['Name'];
                   $approveremail1=$row['RegisterNumber'];
                   $approveremail2=$row['Exam'];
                   $approveremail3=$row['English'];
                   $approveremail4=$row['Tamil'];
                   $approveremail5=$row['Maths'];
                   $approveremail6=$row['Science'];
                   $approveremail7=$row['Social'];
                   $approveremail8=$row['Result'];
                   $approveremail9=$row['Total'];
                   $approveremail10=$row['Email'];
                   $msg = " Name : $approveremail \n Register Number : $approveremail1 \n Exam : $approveremail2 \n English : $approveremail3 \n Tamil : $approveremail4 \n Maths : $approveremail5 \n Science : $approveremail6 \n Social : $approveremail7 \n Result : $approveremail8 \n Total : $approveremail9";
                   // use wordwrap() if lines are longer than 70 characters
                   $msg = wordwrap($msg,70);
                   // send email
                   $k=mail("$approveremail10","Exam Marks",$msg);
                   if($k)
                    {
                      echo "<script value='text/javascript'>alert('Mail Sended !!');location='stviewmarks.php';</script>";
                    }
                  else 
                    {
                      echo "<script value='text/javascript'>alert('Mail Not Sended !!');location='stviewmarks.php';</script>";
                    }
                }
       elseif($rnum == "5A002" && $car == "Quarterly")
                {
                   $query="select * from viewmark where RegisterNumber='5A002' and Exam='Quarterly'";
                   $res=mysqli_query($conn,$query);
                   $row=  mysqli_fetch_assoc($res);
                   $approveremail=$row['Name'];
                   $approveremail1=$row['RegisterNumber'];
                   $approveremail2=$row['Exam'];
                   $approveremail3=$row['English'];
                   $approveremail4=$row['Tamil'];
                   $approveremail5=$row['Maths'];
                   $approveremail6=$row['Science'];
                   $approveremail7=$row['Social'];
                   $approveremail8=$row['Result'];
                   $approveremail9=$row['Total'];
                   $approveremail10=$row['Email'];
                   $msg = " Name : $approveremail \n Register Number : $approveremail1 \n Exam : $approveremail2 \n English : $approveremail3 \n Tamil : $approveremail4 \n Maths : $approveremail5 \n Science : $approveremail6 \n Social : $approveremail7 \n Result : $approveremail8 \n Total : $approveremail9";
                   // use wordwrap() if lines are longer than 70 characters
                   $msg = wordwrap($msg,70);
                   // send email
                   $k=mail("$approveremail10","Exam Marks",$msg);
                   if($k)
                    {
                        echo "<script value='text/javascript'>alert('Mail Sended !!');location='stviewmarks.php';</script>";
                    }
                  else 
                    {
                        echo "<script value='text/javascript'>alert('Mail Not Sended !!');location='stviewmarks.php';</script>";
                    }
                }
            elseif($rnum == "5A003" && $car == "Quarterly")
                {
                   $query="select * from viewmark where RegisterNumber='5A003' and Exam='Quarterly'";
                   $res=mysqli_query($conn,$query);
                   $row=  mysqli_fetch_assoc($res);
                   $approveremail=$row['Name'];
                   $approveremail1=$row['RegisterNumber'];
                   $approveremail2=$row['Exam'];
                   $approveremail3=$row['English'];
                   $approveremail4=$row['Tamil'];
                   $approveremail5=$row['Maths'];
                   $approveremail6=$row['Science'];
                   $approveremail7=$row['Social'];
                   $approveremail8=$row['Result'];
                   $approveremail9=$row['Total'];
                   $approveremail10=$row['Email'];
                   $msg = " Name : $approveremail \n Register Number : $approveremail1 \n Exam : $approveremail2 \n English : $approveremail3 \n Tamil : $approveremail4 \n Maths : $approveremail5 \n Science : $approveremail6 \n Social : $approveremail7 \n Result : $approveremail8 \n Total : $approveremail9";
                   // use wordwrap() if lines are longer than 70 characters
                   $msg = wordwrap($msg,70);
                   // send email
                   $k=mail("$approveremail10","Exam Marks",$msg);
                   if($k)
                    {
                        echo "<script value='text/javascript'>alert('Mail Sended !!');location='stviewmarks.php';</script>";
                    }
                  else 
                    {
                        echo "<script value='text/javascript'>alert('Mail Not Sended !!');location='stviewmarks.php';</script>";
                    }
                }         
           elseif($rnum == "5A004" && $car == "Quarterly")
                {
                   $query="select * from viewmark where RegisterNumber='5A004' and Exam='Quarterly'";
                   $res=mysqli_query($conn,$query);
                   $row=  mysqli_fetch_assoc($res);
                   $approveremail=$row['Name'];
                   $approveremail1=$row['RegisterNumber'];
                   $approveremail2=$row['Exam'];
                   $approveremail3=$row['English'];
                   $approveremail4=$row['Tamil'];
                   $approveremail5=$row['Maths'];
                   $approveremail6=$row['Science'];
                   $approveremail7=$row['Social'];
                   $approveremail8=$row['Result'];
                   $approveremail9=$row['Total'];
                   $approveremail10=$row['Email'];
                   $msg = " Name : $approveremail \n Register Number : $approveremail1 \n Exam : $approveremail2 \n English : $approveremail3 \n Tamil : $approveremail4 \n Maths : $approveremail5 \n Science : $approveremail6 \n Social : $approveremail7 \n Result : $approveremail8 \n Total : $approveremail9";
                   // use wordwrap() if lines are longer than 70 characters
                   $msg = wordwrap($msg,70);
                   // send email
                   $k=mail("$approveremail10","Exam Marks",$msg);
                   if($k)
                    {
                        echo "<script value='text/javascript'>alert('Mail Sended !!');location='stviewmarks.php';</script>";
                    }
                  else 
                    {
                        echo "<script value='text/javascript'>alert('Mail Not Sended !!');location='stviewmarks.php';</script>";
                    }
                }         
           elseif($rnum == "5A005" && $car == "Quarterly")
                {
                   $query="select * from viewmark where RegisterNumber='5A005' and Exam='Quarterly'";
                   $res=mysqli_query($conn,$query);
                   $row=  mysqli_fetch_assoc($res);
                   $approveremail=$row['Name'];
                   $approveremail1=$row['RegisterNumber'];
                   $approveremail2=$row['Exam'];
                   $approveremail3=$row['English'];
                   $approveremail4=$row['Tamil'];
                   $approveremail5=$row['Maths'];
                   $approveremail6=$row['Science'];
                   $approveremail7=$row['Social'];
                   $approveremail8=$row['Result'];
                   $approveremail9=$row['Total'];
                   $approveremail10=$row['Email'];
                   $msg = " Name : $approveremail \n Register Number : $approveremail1 \n Exam : $approveremail2 \n English : $approveremail3 \n Tamil : $approveremail4 \n Maths : $approveremail5 \n Science : $approveremail6 \n Social : $approveremail7 \n Result : $approveremail8 \n Total : $approveremail9";
                   // use wordwrap() if lines are longer than 70 characters
                   $msg = wordwrap($msg,70);
                   // send email
                   $k=mail("$approveremail10","Exam Marks",$msg);
                   if($k)
                    {
                        echo "<script value='text/javascript'>alert('Mail Sended !!');location='stviewmarks.php';</script>";
                    }
                  else 
                    {
                        echo "<script value='text/javascript'>alert('Mail Not Sended !!');location='stviewmarks.php';</script>";
                    }
                }         
        elseif($rnum == "5A006" && $car == "Quarterly")
                {
                   $query="select * from viewmark where RegisterNumber='5A006' and Exam='Quarterly'";
                   $res=mysqli_query($conn,$query);
                   $row=  mysqli_fetch_assoc($res);
                   $approveremail=$row['Name'];
                   $approveremail1=$row['RegisterNumber'];
                   $approveremail2=$row['Exam'];
                   $approveremail3=$row['English'];
                   $approveremail4=$row['Tamil'];
                   $approveremail5=$row['Maths'];
                   $approveremail6=$row['Science'];
                   $approveremail7=$row['Social'];
                   $approveremail8=$row['Result'];
                   $approveremail9=$row['Total'];
                   $approveremail10=$row['Email'];
                   $msg = " Name : $approveremail \n Register Number : $approveremail1 \n Exam : $approveremail2 \n English : $approveremail3 \n Tamil : $approveremail4 \n Maths : $approveremail5 \n Science : $approveremail6 \n Social : $approveremail7 \n Result : $approveremail8 \n Total : $approveremail9";
                   // use wordwrap() if lines are longer than 70 characters
                   $msg = wordwrap($msg,70);
                   // send email
                   $k=mail("$approveremail10","Exam Marks",$msg);
                   if($k)
                    {
                        echo "<script value='text/javascript'>alert('Mail Sended !!');location='stviewmarks.php';</script>";
                    }
                  else 
                    {
                        echo "<script value='text/javascript'>alert('Mail Not Sended !!');location='stviewmarks.php';</script>";
                    }
                }         
             elseif($rnum == "5A007" && $car == "Quarterly")
                {
                   $query="select * from viewmark where RegisterNumber='5A007' and Exam='Quarterly'";
                   $res=mysqli_query($conn,$query);
                   $row=  mysqli_fetch_assoc($res);
                   $approveremail=$row['Name'];
                   $approveremail1=$row['RegisterNumber'];
                   $approveremail2=$row['Exam'];
                   $approveremail3=$row['English'];
                   $approveremail4=$row['Tamil'];
                   $approveremail5=$row['Maths'];
                   $approveremail6=$row['Science'];
                   $approveremail7=$row['Social'];
                   $approveremail8=$row['Result'];
                   $approveremail9=$row['Total'];
                   $approveremail10=$row['Email'];
                   $msg = " Name : $approveremail \n Register Number : $approveremail1 \n Exam : $approveremail2 \n English : $approveremail3 \n Tamil : $approveremail4 \n Maths : $approveremail5 \n Science : $approveremail6 \n Social : $approveremail7 \n Result : $approveremail8 \n Total : $approveremail9";
                   // use wordwrap() if lines are longer than 70 characters
                   $msg = wordwrap($msg,70);
                   // send email
                   $k=mail("$approveremail10","Exam Marks",$msg);
                   if($k)
                    {
                        echo "<script value='text/javascript'>alert('Mail Sended !!');location='stviewmarks.php';</script>";
                    }
                  else 
                    {
                        echo "<script value='text/javascript'>alert('Mail Not Sended !!');location='stviewmarks.php';</script>";
                    }
                }         
            elseif($rnum == "5A008" && $car == "Quarterly")
                {
                   $query="select * from viewmark where RegisterNumber='5A008' and Exam='Quarterly'";
                   $res=mysqli_query($conn,$query);
                   $row=  mysqli_fetch_assoc($res);
                   $approveremail=$row['Name'];
                   $approveremail1=$row['RegisterNumber'];
                   $approveremail2=$row['Exam'];
                   $approveremail3=$row['English'];
                   $approveremail4=$row['Tamil'];
                   $approveremail5=$row['Maths'];
                   $approveremail6=$row['Science'];
                   $approveremail7=$row['Social'];
                   $approveremail8=$row['Result'];
                   $approveremail9=$row['Total'];
                   $approveremail10=$row['Email'];
                   $msg = " Name : $approveremail \n Register Number : $approveremail1 \n Exam : $approveremail2 \n English : $approveremail3 \n Tamil : $approveremail4 \n Maths : $approveremail5 \n Science : $approveremail6 \n Social : $approveremail7 \n Result : $approveremail8 \n Total : $approveremail9";
                   // use wordwrap() if lines are longer than 70 characters
                   $msg = wordwrap($msg,70);
                   // send email
                   $k=mail("$approveremail10","Exam Marks",$msg);
                   if($k)
                    {
                        echo "<script value='text/javascript'>alert('Mail Sended !!');location='stviewmarks.php';</script>";
                    }
                  else 
                    {
                        echo "<script value='text/javascript'>alert('Mail Not Sended !!');location='stviewmarks.php';</script>";
                    }
                }         
               elseif($rnum == "5A009" && $car == "Quarterly")
                {
                   $query="select * from viewmark where RegisterNumber='5A009' and Exam='Quarterly'";
                   $res=mysqli_query($conn,$query);
                   $row=  mysqli_fetch_assoc($res);
                   $approveremail=$row['Name'];
                   $approveremail1=$row['RegisterNumber'];
                   $approveremail2=$row['Exam'];
                   $approveremail3=$row['English'];
                   $approveremail4=$row['Tamil'];
                   $approveremail5=$row['Maths'];
                   $approveremail6=$row['Science'];
                   $approveremail7=$row['Social'];
                   $approveremail8=$row['Result'];
                   $approveremail9=$row['Total'];
                   $approveremail10=$row['Email'];
                   $msg = " Name : $approveremail \n Register Number : $approveremail1 \n Exam : $approveremail2 \n English : $approveremail3 \n Tamil : $approveremail4 \n Maths : $approveremail5 \n Science : $approveremail6 \n Social : $approveremail7 \n Result : $approveremail8 \n Total : $approveremail9";
                   // use wordwrap() if lines are longer than 70 characters
                   $msg = wordwrap($msg,70);
                   // send email
                   $k=mail("$approveremail10","Exam Marks",$msg);
                   if($k)
                    {
                        echo "<script value='text/javascript'>alert('Mail Sended !!');location='stviewmarks.php';</script>";
                    }
                  else 
                    {
                        echo "<script value='text/javascript'>alert('Mail Not Sended !!');location='stviewmarks.php';</script>";
                    }
                }         
              elseif($rnum == "5A010" && $car == "Quarterly")
                {
                   $query="select * from viewmark where RegisterNumber='5A010' and Exam='Quarterly'";
                   $res=mysqli_query($conn,$query);
                   $row=  mysqli_fetch_assoc($res);
                   $approveremail=$row['Name'];
                   $approveremail1=$row['RegisterNumber'];
                   $approveremail2=$row['Exam'];
                   $approveremail3=$row['English'];
                   $approveremail4=$row['Tamil'];
                   $approveremail5=$row['Maths'];
                   $approveremail6=$row['Science'];
                   $approveremail7=$row['Social'];
                   $approveremail8=$row['Result'];
                   $approveremail9=$row['Total'];
                   $approveremail10=$row['Email'];
                   $msg = " Name : $approveremail \n Register Number : $approveremail1 \n Exam : $approveremail2 \n English : $approveremail3 \n Tamil : $approveremail4 \n Maths : $approveremail5 \n Science : $approveremail6 \n Social : $approveremail7 \n Result : $approveremail8 \n Total : $approveremail9";
                   // use wordwrap() if lines are longer than 70 characters
                   $msg = wordwrap($msg,70);
                   // send email
                   $k=mail("$approveremail10","Exam Marks",$msg);
                   if($k)
                    {
                        echo "<script value='text/javascript'>alert('Mail Sended !!');location='stviewmarks.php';</script>";
                    }
                  else 
                    {
                        echo "<script value='text/javascript'>alert('Mail Not Sended !!');location='stviewmarks.php';</script>";
                    }
                }         
            elseif($rnum == "5A011" && $car == "Quarterly")
                {
                   $query="select * from viewmark where RegisterNumber='5A011' and Exam='Quarterly'";
                   $res=mysqli_query($conn,$query);
                   $row=  mysqli_fetch_assoc($res);
                   $approveremail=$row['Name'];
                   $approveremail1=$row['RegisterNumber'];
                   $approveremail2=$row['Exam'];
                   $approveremail3=$row['English'];
                   $approveremail4=$row['Tamil'];
                   $approveremail5=$row['Maths'];
                   $approveremail6=$row['Science'];
                   $approveremail7=$row['Social'];
                   $approveremail8=$row['Result'];
                   $approveremail9=$row['Total'];
                   $approveremail10=$row['Email'];
                   $msg = " Name : $approveremail \n Register Number : $approveremail1 \n Exam : $approveremail2 \n English : $approveremail3 \n Tamil : $approveremail4 \n Maths : $approveremail5 \n Science : $approveremail6 \n Social : $approveremail7 \n Result : $approveremail8 \n Total : $approveremail9";
                   // use wordwrap() if lines are longer than 70 characters
                   $msg = wordwrap($msg,70);
                   // send email
                   $k=mail("$approveremail10","Exam Marks",$msg);
                   if($k)
                    {
                        echo "<script value='text/javascript'>alert('Mail Sended !!');location='stviewmarks.php';</script>";
                    }
                  else 
                    {
                        echo "<script value='text/javascript'>alert('Mail Not Sended !!');location='stviewmarks.php';</script>";
                    }
                }         
            elseif($rnum == "5A012" && $car == "Quarterly")
                {
                   $query="select * from viewmark where RegisterNumber='5A012' and Exam='Quarterly'";
                   $res=mysqli_query($conn,$query);
                   $row=  mysqli_fetch_assoc($res);
                   $approveremail=$row['Name'];
                   $approveremail1=$row['RegisterNumber'];
                   $approveremail2=$row['Exam'];
                   $approveremail3=$row['English'];
                   $approveremail4=$row['Tamil'];
                   $approveremail5=$row['Maths'];
                   $approveremail6=$row['Science'];
                   $approveremail7=$row['Social'];
                   $approveremail8=$row['Result'];
                   $approveremail9=$row['Total'];
                   $approveremail10=$row['Email'];
                   $msg = " Name : $approveremail \n Register Number : $approveremail1 \n Exam : $approveremail2 \n English : $approveremail3 \n Tamil : $approveremail4 \n Maths : $approveremail5 \n Science : $approveremail6 \n Social : $approveremail7 \n Result : $approveremail8 \n Total : $approveremail9";
                   // use wordwrap() if lines are longer than 70 characters
                   $msg = wordwrap($msg,70);
                   // send email
                   $k=mail("$approveremail10","Exam Marks",$msg);
                   if($k)
                    {
                        echo "<script value='text/javascript'>alert('Mail Sended !!');location='stviewmarks.php';</script>";
                    }
                  else 
                    {
                        echo "<script value='text/javascript'>alert('Mail Not Sended !!');location='stviewmarks.php';</script>";
                    }
                }         
            elseif($rnum == "5A001" && $car == "Halfyearly")
                {
                   $query="select * from viewmark where RegisterNumber='5A001' and Exam='Half yearly'";
                   $res=mysqli_query($conn,$query);
                   $row=  mysqli_fetch_assoc($res);
                   $approveremail=$row['Name'];
                   $approveremail1=$row['RegisterNumber'];
                   $approveremail2=$row['Exam'];
                   $approveremail3=$row['English'];
                   $approveremail4=$row['Tamil'];
                   $approveremail5=$row['Maths'];
                   $approveremail6=$row['Science'];
                   $approveremail7=$row['Social'];
                   $approveremail8=$row['Result'];
                   $approveremail9=$row['Total'];
                   $approveremail10=$row['Email'];
                   $msg = " Name : $approveremail \n Register Number : $approveremail1 \n Exam : $approveremail2 \n English : $approveremail3 \n Tamil : $approveremail4 \n Maths : $approveremail5 \n Science : $approveremail6 \n Social : $approveremail7 \n Result : $approveremail8 \n Total : $approveremail9";
                   // use wordwrap() if lines are longer than 70 characters
                   $msg = wordwrap($msg,70);
                   // send email
                   $k=mail("$approveremail10","Exam Marks",$msg);
                   if($k)
                    {
                        echo "<script value='text/javascript'>alert('Mail Sended !!');location='stviewmarks.php';</script>";
                    }
                  else 
                    {
                        echo "<script value='text/javascript'>alert('Mail Not Sended !!');location='stviewmarks.php';</script>";
                    }
                }         
                elseif($rnum == "5A002" && $car == "Halfyearly")
                {
                   $query="select * from viewmark where RegisterNumber='5A002' and Exam='Half yearly'";
                   $res=mysqli_query($conn,$query);
                   $row=  mysqli_fetch_assoc($res);
                   $approveremail=$row['Name'];
                   $approveremail1=$row['RegisterNumber'];
                   $approveremail2=$row['Exam'];
                   $approveremail3=$row['English'];
                   $approveremail4=$row['Tamil'];
                   $approveremail5=$row['Maths'];
                   $approveremail6=$row['Science'];
                   $approveremail7=$row['Social'];
                   $approveremail8=$row['Result'];
                   $approveremail9=$row['Total'];
                   $approveremail10=$row['Email'];
                   $msg = " Name : $approveremail \n Register Number : $approveremail1 \n Exam : $approveremail2 \n English : $approveremail3 \n Tamil : $approveremail4 \n Maths : $approveremail5 \n Science : $approveremail6 \n Social : $approveremail7 \n Result : $approveremail8 \n Total : $approveremail9";
                   // use wordwrap() if lines are longer than 70 characters
                   $msg = wordwrap($msg,70);
                   // send email
                   $k=mail("$approveremail10","Exam Marks",$msg);
                   if($k)
                    {
                        echo "<script value='text/javascript'>alert('Mail Sended !!');location='stviewmarks.php';</script>";
                    }
                  else 
                    {
                        echo "<script value='text/javascript'>alert('Mail Not Sended !!');location='stviewmarks.php';</script>";
                    }
                }         
                elseif($rnum == "5A003" && $car == "Halfyearly")
                {
                   $query="select * from viewmark where RegisterNumber='5A003' and Exam='Half yearly'";
                   $res=mysqli_query($conn,$query);
                   $row=  mysqli_fetch_assoc($res);
                   $approveremail=$row['Name'];
                   $approveremail1=$row['RegisterNumber'];
                   $approveremail2=$row['Exam'];
                   $approveremail3=$row['English'];
                   $approveremail4=$row['Tamil'];
                   $approveremail5=$row['Maths'];
                   $approveremail6=$row['Science'];
                   $approveremail7=$row['Social'];
                   $approveremail8=$row['Result'];
                   $approveremail9=$row['Total'];
                   $approveremail10=$row['Email'];
                   $msg = " Name : $approveremail \n Register Number : $approveremail1 \n Exam : $approveremail2 \n English : $approveremail3 \n Tamil : $approveremail4 \n Maths : $approveremail5 \n Science : $approveremail6 \n Social : $approveremail7 \n Result : $approveremail8 \n Total : $approveremail9";
                   // use wordwrap() if lines are longer than 70 characters
                   $msg = wordwrap($msg,70);
                   // send email
                   $k=mail("$approveremail10","Exam Marks",$msg);
                   if($k)
                    {
                        echo "<script value='text/javascript'>alert('Mail Sended !!');location='stviewmarks.php';</script>";
                    }
                  else 
                    {
                        echo "<script value='text/javascript'>alert('Mail Not Sended !!');location='stviewmarks.php';</script>";
                    }
                }         
                elseif($rnum == "5A004" && $car == "Halfyearly")
                {
                   $query="select * from viewmark where RegisterNumber='5A004' and Exam='Half yearly'";
                   $res=mysqli_query($conn,$query);
                   $row=  mysqli_fetch_assoc($res);
                   $approveremail=$row['Name'];
                   $approveremail1=$row['RegisterNumber'];
                   $approveremail2=$row['Exam'];
                   $approveremail3=$row['English'];
                   $approveremail4=$row['Tamil'];
                   $approveremail5=$row['Maths'];
                   $approveremail6=$row['Science'];
                   $approveremail7=$row['Social'];
                   $approveremail8=$row['Result'];
                   $approveremail9=$row['Total'];
                   $approveremail10=$row['Email'];
                   $msg = " Name : $approveremail \n Register Number : $approveremail1 \n Exam : $approveremail2 \n English : $approveremail3 \n Tamil : $approveremail4 \n Maths : $approveremail5 \n Science : $approveremail6 \n Social : $approveremail7 \n Result : $approveremail8 \n Total : $approveremail9";
                   // use wordwrap() if lines are longer than 70 characters
                   $msg = wordwrap($msg,70);
                   // send email
                   $k=mail("$approveremail10","Exam Marks",$msg);
                   if($k)
                    {
                        echo "<script value='text/javascript'>alert('Mail Sended !!');location='stviewmarks.php';</script>";
                    }
                  else 
                    {
                        echo "<script value='text/javascript'>alert('Mail Not Sended !!');location='stviewmarks.php';</script>";
                    }
                }         
                elseif($rnum == "5A005" && $car == "Halfyearly")
                {
                   $query="select * from viewmark where RegisterNumber='5A005' and Exam='Half yearly'";
                   $res=mysqli_query($conn,$query);
                   $row=  mysqli_fetch_assoc($res);
                   $approveremail=$row['Name'];
                   $approveremail1=$row['RegisterNumber'];
                   $approveremail2=$row['Exam'];
                   $approveremail3=$row['English'];
                   $approveremail4=$row['Tamil'];
                   $approveremail5=$row['Maths'];
                   $approveremail6=$row['Science'];
                   $approveremail7=$row['Social'];
                   $approveremail8=$row['Result'];
                   $approveremail9=$row['Total'];
                   $approveremail10=$row['Email'];
                   $msg = " Name : $approveremail \n Register Number : $approveremail1 \n Exam : $approveremail2 \n English : $approveremail3 \n Tamil : $approveremail4 \n Maths : $approveremail5 \n Science : $approveremail6 \n Social : $approveremail7 \n Result : $approveremail8 \n Total : $approveremail9";
                   // use wordwrap() if lines are longer than 70 characters
                   $msg = wordwrap($msg,70);
                   // send email
                   $k=mail("$approveremail10","Exam Marks",$msg);
                   if($k)
                    {
                        echo "<script value='text/javascript'>alert('Mail Sended !!');location='stviewmarks.php';</script>";
                    }
                  else 
                    {
                        echo "<script value='text/javascript'>alert('Mail Not Sended !!');location='stviewmarks.php';</script>";
                    }
                }         
                elseif($rnum == "5A006" && $car == "Halfyearly")
                {
                   $query="select * from viewmark where RegisterNumber='5A006' and Exam='Half yearly'";
                   $res=mysqli_query($conn,$query);
                   $row=  mysqli_fetch_assoc($res);
                   $approveremail=$row['Name'];
                   $approveremail1=$row['RegisterNumber'];
                   $approveremail2=$row['Exam'];
                   $approveremail3=$row['English'];
                   $approveremail4=$row['Tamil'];
                   $approveremail5=$row['Maths'];
                   $approveremail6=$row['Science'];
                   $approveremail7=$row['Social'];
                   $approveremail8=$row['Result'];
                   $approveremail9=$row['Total'];
                   $approveremail10=$row['Email'];
                   $msg = " Name : $approveremail \n Register Number : $approveremail1 \n Exam : $approveremail2 \n English : $approveremail3 \n Tamil : $approveremail4 \n Maths : $approveremail5 \n Science : $approveremail6 \n Social : $approveremail7 \n Result : $approveremail8 \n Total : $approveremail9";
                   // use wordwrap() if lines are longer than 70 characters
                   $msg = wordwrap($msg,70);
                   // send email
                   $k=mail("$approveremail10","Exam Marks",$msg);
                   if($k)
                    {
                        echo "<script value='text/javascript'>alert('Mail Sended !!');location='stviewmarks.php';</script>";
                    }
                  else 
                    {
                        echo "<script value='text/javascript'>alert('Mail Not Sended !!');location='stviewmarks.php';</script>";
                    }
                }         
                elseif($rnum == "5A007" && $car == "Halfyearly")
                {
                   $query="select * from viewmark where RegisterNumber='5A007' and Exam='Half yearly'";
                   $res=mysqli_query($conn,$query);
                   $row=  mysqli_fetch_assoc($res);
                   $approveremail=$row['Name'];
                   $approveremail1=$row['RegisterNumber'];
                   $approveremail2=$row['Exam'];
                   $approveremail3=$row['English'];
                   $approveremail4=$row['Tamil'];
                   $approveremail5=$row['Maths'];
                   $approveremail6=$row['Science'];
                   $approveremail7=$row['Social'];
                   $approveremail8=$row['Result'];
                   $approveremail9=$row['Total'];
                   $approveremail10=$row['Email'];
                   $msg = " Name : $approveremail \n Register Number : $approveremail1 \n Exam : $approveremail2 \n English : $approveremail3 \n Tamil : $approveremail4 \n Maths : $approveremail5 \n Science : $approveremail6 \n Social : $approveremail7 \n Result : $approveremail8 \n Total : $approveremail9";
                   // use wordwrap() if lines are longer than 70 characters
                   $msg = wordwrap($msg,70);
                   // send email
                   $k=mail("$approveremail10","Exam Marks",$msg);
                   if($k)
                    {
                        echo "<script value='text/javascript'>alert('Mail Sended !!');location='stviewmarks.php';</script>";
                    }
                  else 
                    {
                        echo "<script value='text/javascript'>alert('Mail Not Sended !!');location='stviewmarks.php';</script>";
                    }
                }         
                elseif($rnum == "5A008" && $car == "Halfyearly")
                {
                   $query="select * from viewmark where RegisterNumber='5A008' and Exam='Half yearly'";
                   $res=mysqli_query($conn,$query);
                   $row=  mysqli_fetch_assoc($res);
                   $approveremail=$row['Name'];
                   $approveremail1=$row['RegisterNumber'];
                   $approveremail2=$row['Exam'];
                   $approveremail3=$row['English'];
                   $approveremail4=$row['Tamil'];
                   $approveremail5=$row['Maths'];
                   $approveremail6=$row['Science'];
                   $approveremail7=$row['Social'];
                   $approveremail8=$row['Result'];
                   $approveremail9=$row['Total'];
                   $approveremail10=$row['Email'];
                   $msg = " Name : $approveremail \n Register Number : $approveremail1 \n Exam : $approveremail2 \n English : $approveremail3 \n Tamil : $approveremail4 \n Maths : $approveremail5 \n Science : $approveremail6 \n Social : $approveremail7 \n Result : $approveremail8 \n Total : $approveremail9";
                   // use wordwrap() if lines are longer than 70 characters
                   $msg = wordwrap($msg,70);
                   // send email
                   $k=mail("$approveremail10","Exam Marks",$msg);
                   if($k)
                    {
                        echo "<script value='text/javascript'>alert('Mail Sended !!');location='stviewmarks.php';</script>";
                    }
                  else 
                    {
                        echo "<script value='text/javascript'>alert('Mail Not Sended !!');location='stviewmarks.php';</script>";
                    }
                }         
                elseif($rnum == "5A009" && $car == "Halfyearly")
                {
                   $query="select * from viewmark where RegisterNumber='5A009' and Exam='Half yearly'";
                   $res=mysqli_query($conn,$query);
                   $row=  mysqli_fetch_assoc($res);
                   $approveremail=$row['Name'];
                   $approveremail1=$row['RegisterNumber'];
                   $approveremail2=$row['Exam'];
                   $approveremail3=$row['English'];
                   $approveremail4=$row['Tamil'];
                   $approveremail5=$row['Maths'];
                   $approveremail6=$row['Science'];
                   $approveremail7=$row['Social'];
                   $approveremail8=$row['Result'];
                   $approveremail9=$row['Total'];
                   $approveremail10=$row['Email'];
                   $msg = " Name : $approveremail \n Register Number : $approveremail1 \n Exam : $approveremail2 \n English : $approveremail3 \n Tamil : $approveremail4 \n Maths : $approveremail5 \n Science : $approveremail6 \n Social : $approveremail7 \n Result : $approveremail8 \n Total : $approveremail9";
                   // use wordwrap() if lines are longer than 70 characters
                   $msg = wordwrap($msg,70);
                   // send email
                   $k=mail("$approveremail10","Exam Marks",$msg);
                   if($k)
                    {
                        echo "<script value='text/javascript'>alert('Mail Sended !!');location='stviewmarks.php';</script>";
                    }
                  else 
                    {
                        echo "<script value='text/javascript'>alert('Mail Not Sended !!');location='stviewmarks.php';</script>";
                    }
                }         
                elseif($rnum == "5A010" && $car == "Halfyearly")
                {
                   $query="select * from viewmark where RegisterNumber='5A010' and Exam='Half yearly'";
                   $res=mysqli_query($conn,$query);
                   $row=  mysqli_fetch_assoc($res);
                   $approveremail=$row['Name'];
                   $approveremail1=$row['RegisterNumber'];
                   $approveremail2=$row['Exam'];
                   $approveremail3=$row['English'];
                   $approveremail4=$row['Tamil'];
                   $approveremail5=$row['Maths'];
                   $approveremail6=$row['Science'];
                   $approveremail7=$row['Social'];
                   $approveremail8=$row['Result'];
                   $approveremail9=$row['Total'];
                   $approveremail10=$row['Email'];
                   $msg = " Name : $approveremail \n Register Number : $approveremail1 \n Exam : $approveremail2 \n English : $approveremail3 \n Tamil : $approveremail4 \n Maths : $approveremail5 \n Science : $approveremail6 \n Social : $approveremail7 \n Result : $approveremail8 \n Total : $approveremail9";
                   // use wordwrap() if lines are longer than 70 characters
                   $msg = wordwrap($msg,70);
                   // send email
                   $k=mail("$approveremail10","Exam Marks",$msg);
                   if($k)
                    {
                        echo "<script value='text/javascript'>alert('Mail Sended !!');location='stviewmarks.php';</script>";
                    }
                  else 
                    {
                        echo "<script value='text/javascript'>alert('Mail Not Sended !!');location='stviewmarks.php';</script>";
                    }
                }         
                elseif($rnum == "5A011" && $car == "Halfyearly")
                {
                   $query="select * from viewmark where RegisterNumber='5A011' and Exam='Half yearly'";
                   $res=mysqli_query($conn,$query);
                   $row=  mysqli_fetch_assoc($res);
                   $approveremail=$row['Name'];
                   $approveremail1=$row['RegisterNumber'];
                   $approveremail2=$row['Exam'];
                   $approveremail3=$row['English'];
                   $approveremail4=$row['Tamil'];
                   $approveremail5=$row['Maths'];
                   $approveremail6=$row['Science'];
                   $approveremail7=$row['Social'];
                   $approveremail8=$row['Result'];
                   $approveremail9=$row['Total'];
                   $approveremail10=$row['Email'];
                   $msg = " Name : $approveremail \n Register Number : $approveremail1 \n Exam : $approveremail2 \n English : $approveremail3 \n Tamil : $approveremail4 \n Maths : $approveremail5 \n Science : $approveremail6 \n Social : $approveremail7 \n Result : $approveremail8 \n Total : $approveremail9";
                   // use wordwrap() if lines are longer than 70 characters
                   $msg = wordwrap($msg,70);
                   // send email
                   $k=mail("$approveremail10","Exam Marks",$msg);
                   if($k)
                    {
                        echo "<script value='text/javascript'>alert('Mail Sended !!');location='stviewmarks.php';</script>";
                    }
                  else 
                    {
                        echo "<script value='text/javascript'>alert('Mail Not Sended !!');location='stviewmarks.php';</script>";
                    }
                }         
                elseif($rnum == "5A012" && $car == "Halfyearly")
                {
                   $query="select * from viewmark where RegisterNumber='5A012' and Exam='Half yearly'";
                   $res=mysqli_query($conn,$query);
                   $row=  mysqli_fetch_assoc($res);
                   $approveremail=$row['Name'];
                   $approveremail1=$row['RegisterNumber'];
                   $approveremail2=$row['Exam'];
                   $approveremail3=$row['English'];
                   $approveremail4=$row['Tamil'];
                   $approveremail5=$row['Maths'];
                   $approveremail6=$row['Science'];
                   $approveremail7=$row['Social'];
                   $approveremail8=$row['Result'];
                   $approveremail9=$row['Total'];
                   $approveremail10=$row['Email'];
                   $msg = " Name : $approveremail \n Register Number : $approveremail1 \n Exam : $approveremail2 \n English : $approveremail3 \n Tamil : $approveremail4 \n Maths : $approveremail5 \n Science : $approveremail6 \n Social : $approveremail7 \n Result : $approveremail8 \n Total : $approveremail9";
                   // use wordwrap() if lines are longer than 70 characters
                   $msg = wordwrap($msg,70);
                   // send email
                   $k=mail("$approveremail10","Exam Marks",$msg);
                   if($k)
                    {
                        echo "<script value='text/javascript'>alert('Mail Sended !!');location='stviewmarks.php';</script>";
                    }
                  else 
                    {
                        echo "<script value='text/javascript'>alert('Mail Not Sended !!');location='stviewmarks.php';</script>";
                    }
                }         
                elseif($rnum == "5A001" && $car == "Annual")
                {
                   $query="select * from viewmark where RegisterNumber='5A001' and Exam='Annual'";
                   $res=mysqli_query($conn,$query);
                   $row=  mysqli_fetch_assoc($res);
                   $approveremail=$row['Name'];
                   $approveremail1=$row['RegisterNumber'];
                   $approveremail2=$row['Exam'];
                   $approveremail3=$row['English'];
                   $approveremail4=$row['Tamil'];
                   $approveremail5=$row['Maths'];
                   $approveremail6=$row['Science'];
                   $approveremail7=$row['Social'];
                   $approveremail8=$row['Result'];
                   $approveremail9=$row['Total'];
                   $approveremail10=$row['Email'];
                   $msg = " Name : $approveremail \n Register Number : $approveremail1 \n Exam : $approveremail2 \n English : $approveremail3 \n Tamil : $approveremail4 \n Maths : $approveremail5 \n Science : $approveremail6 \n Social : $approveremail7 \n Result : $approveremail8 \n Total : $approveremail9";
                   // use wordwrap() if lines are longer than 70 characters
                   $msg = wordwrap($msg,70);
                   // send email
                   $k=mail("$approveremail10","Exam Marks",$msg);
                   if($k)
                    {
                        echo "<script value='text/javascript'>alert('Mail Sended !!');location='stviewmarks.php';</script>";
                    }
                  else 
                    {
                        echo "<script value='text/javascript'>alert('Mail Not Sended !!');location='stviewmarks.php';</script>";
                    }
                }         
                elseif($rnum == "5A002" && $car == "Annual")
                {
                   $query="select * from viewmark where RegisterNumber='5A002' and Exam='Annual'";
                   $res=mysqli_query($conn,$query);
                   $row=  mysqli_fetch_assoc($res);
                   $approveremail=$row['Name'];
                   $approveremail1=$row['RegisterNumber'];
                   $approveremail2=$row['Exam'];
                   $approveremail3=$row['English'];
                   $approveremail4=$row['Tamil'];
                   $approveremail5=$row['Maths'];
                   $approveremail6=$row['Science'];
                   $approveremail7=$row['Social'];
                   $approveremail8=$row['Result'];
                   $approveremail9=$row['Total'];
                   $approveremail10=$row['Email'];
                   $msg = " Name : $approveremail \n Register Number : $approveremail1 \n Exam : $approveremail2 \n English : $approveremail3 \n Tamil : $approveremail4 \n Maths : $approveremail5 \n Science : $approveremail6 \n Social : $approveremail7 \n Result : $approveremail8 \n Total : $approveremail9";
                   // use wordwrap() if lines are longer than 70 characters
                   $msg = wordwrap($msg,70);
                   // send email
                   $k=mail("$approveremail10","Exam Marks",$msg);
                   if($k)
                    {
                        echo "<script value='text/javascript'>alert('Mail Sended !!');location='stviewmarks.php';</script>";
                    }
                  else 
                    {
                        echo "<script value='text/javascript'>alert('Mail Not Sended !!');location='stviewmarks.php';</script>";
                    }
                }         
                elseif($rnum == "5A003" && $car == "Annual")
                {
                   $query="select * from viewmark where RegisterNumber='5A003' and Exam='Annual'";
                   $res=mysqli_query($conn,$query);
                   $row=  mysqli_fetch_assoc($res);
                   $approveremail=$row['Name'];
                   $approveremail1=$row['RegisterNumber'];
                   $approveremail2=$row['Exam'];
                   $approveremail3=$row['English'];
                   $approveremail4=$row['Tamil'];
                   $approveremail5=$row['Maths'];
                   $approveremail6=$row['Science'];
                   $approveremail7=$row['Social'];
                   $approveremail8=$row['Result'];
                   $approveremail9=$row['Total'];
                   $approveremail10=$row['Email'];
                   $msg = " Name : $approveremail \n Register Number : $approveremail1 \n Exam : $approveremail2 \n English : $approveremail3 \n Tamil : $approveremail4 \n Maths : $approveremail5 \n Science : $approveremail6 \n Social : $approveremail7 \n Result : $approveremail8 \n Total : $approveremail9";
                   // use wordwrap() if lines are longer than 70 characters
                   $msg = wordwrap($msg,70);
                   // send email
                   $k=mail("$approveremail10","Exam Marks",$msg);
                   if($k)
                    {
                        echo "<script value='text/javascript'>alert('Mail Sended !!');location='stviewmarks.php';</script>";
                    }
                  else 
                    {
                        echo "<script value='text/javascript'>alert('Mail Not Sended !!');location='stviewmarks.php';</script>";
                    }
                }         
                elseif($rnum == "5A004" && $car == "Annual")
                {
                   $query="select * from viewmark where RegisterNumber='5A004' and Exam='Annual'";
                   $res=mysqli_query($conn,$query);
                   $row=  mysqli_fetch_assoc($res);
                   $approveremail=$row['Name'];
                   $approveremail1=$row['RegisterNumber'];
                   $approveremail2=$row['Exam'];
                   $approveremail3=$row['English'];
                   $approveremail4=$row['Tamil'];
                   $approveremail5=$row['Maths'];
                   $approveremail6=$row['Science'];
                   $approveremail7=$row['Social'];
                   $approveremail8=$row['Result'];
                   $approveremail9=$row['Total'];
                   $approveremail10=$row['Email'];
                   $msg = " Name : $approveremail \n Register Number : $approveremail1 \n Exam : $approveremail2 \n English : $approveremail3 \n Tamil : $approveremail4 \n Maths : $approveremail5 \n Science : $approveremail6 \n Social : $approveremail7 \n Result : $approveremail8 \n Total : $approveremail9";
                   // use wordwrap() if lines are longer than 70 characters
                   $msg = wordwrap($msg,70);
                   // send email
                   $k=mail("$approveremail10","Exam Marks",$msg);
                   if($k)
                    {
                        echo "<script value='text/javascript'>alert('Mail Sended !!');location='stviewmarks.php';</script>";
                    }
                  else 
                    {
                        echo "<script value='text/javascript'>alert('Mail Not Sended !!');location='stviewmarks.php';</script>";
                    }
                }         
                elseif($rnum == "5A005" && $car == "Annual")
                {
                   $query="select * from viewmark where RegisterNumber='5A005' and Exam='Annual'";
                   $res=mysqli_query($conn,$query);
                   $row=  mysqli_fetch_assoc($res);
                   $approveremail=$row['Name'];
                   $approveremail1=$row['RegisterNumber'];
                   $approveremail2=$row['Exam'];
                   $approveremail3=$row['English'];
                   $approveremail4=$row['Tamil'];
                   $approveremail5=$row['Maths'];
                   $approveremail6=$row['Science'];
                   $approveremail7=$row['Social'];
                   $approveremail8=$row['Result'];
                   $approveremail9=$row['Total'];
                   $approveremail10=$row['Email'];
                   $msg = " Name : $approveremail \n Register Number : $approveremail1 \n Exam : $approveremail2 \n English : $approveremail3 \n Tamil : $approveremail4 \n Maths : $approveremail5 \n Science : $approveremail6 \n Social : $approveremail7 \n Result : $approveremail8 \n Total : $approveremail9";
                   // use wordwrap() if lines are longer than 70 characters
                   $msg = wordwrap($msg,70);
                   // send email
                   $k=mail("$approveremail10","Exam Marks",$msg);
                   if($k)
                    {
                        echo "<script value='text/javascript'>alert('Mail Sended !!');location='stviewmarks.php';</script>";
                    }
                  else 
                    {
                        echo "<script value='text/javascript'>alert('Mail Not Sended !!');location='stviewmarks.php';</script>";
                    }
                }         
                elseif($rnum == "5A006" && $car == "Annual")
                {
                   $query="select * from viewmark where RegisterNumber='5A006' and Exam='Annual'";
                   $res=mysqli_query($conn,$query);
                   $row=  mysqli_fetch_assoc($res);
                   $approveremail=$row['Name'];
                   $approveremail1=$row['RegisterNumber'];
                   $approveremail2=$row['Exam'];
                   $approveremail3=$row['English'];
                   $approveremail4=$row['Tamil'];
                   $approveremail5=$row['Maths'];
                   $approveremail6=$row['Science'];
                   $approveremail7=$row['Social'];
                   $approveremail8=$row['Result'];
                   $approveremail9=$row['Total'];
                   $approveremail10=$row['Email'];
                   $msg = " Name : $approveremail \n Register Number : $approveremail1 \n Exam : $approveremail2 \n English : $approveremail3 \n Tamil : $approveremail4 \n Maths : $approveremail5 \n Science : $approveremail6 \n Social : $approveremail7 \n Result : $approveremail8 \n Total : $approveremail9";
                   // use wordwrap() if lines are longer than 70 characters
                   $msg = wordwrap($msg,70);
                   // send email
                   $k=mail("$approveremail10","Exam Marks",$msg);
                   if($k)
                    {
                        echo "<script value='text/javascript'>alert('Mail Sended !!');location='stviewmarks.php';</script>";
                    }
                  else 
                    {
                        echo "<script value='text/javascript'>alert('Mail Not Sended !!');location='stviewmarks.php';</script>";
                    }
                }         
                elseif($rnum == "5A007" && $car == "Annual")
                {
                   $query="select * from viewmark where RegisterNumber='5A007' and Exam='Annual'";
                   $res=mysqli_query($conn,$query);
                   $row=  mysqli_fetch_assoc($res);
                   $approveremail=$row['Name'];
                   $approveremail1=$row['RegisterNumber'];
                   $approveremail2=$row['Exam'];
                   $approveremail3=$row['English'];
                   $approveremail4=$row['Tamil'];
                   $approveremail5=$row['Maths'];
                   $approveremail6=$row['Science'];
                   $approveremail7=$row['Social'];
                   $approveremail8=$row['Result'];
                   $approveremail9=$row['Total'];
                   $approveremail10=$row['Email'];
                   $msg = " Name : $approveremail \n Register Number : $approveremail1 \n Exam : $approveremail2 \n English : $approveremail3 \n Tamil : $approveremail4 \n Maths : $approveremail5 \n Science : $approveremail6 \n Social : $approveremail7 \n Result : $approveremail8 \n Total : $approveremail9";
                   // use wordwrap() if lines are longer than 70 characters
                   $msg = wordwrap($msg,70);
                   // send email
                   $k=mail("$approveremail10","Exam Marks",$msg);
                   if($k)
                    {
                        echo "<script value='text/javascript'>alert('Mail Sended !!');location='stviewmarks.php';</script>";
                    }
                  else 
                    {
                        echo "<script value='text/javascript'>alert('Mail Not Sended !!');location='stviewmarks.php';</script>";
                    }
                }         
                elseif($rnum == "5A008" && $car == "Annual")
                {
                   $query="select * from viewmark where RegisterNumber='5A008' and Exam='Annual'";
                   $res=mysqli_query($conn,$query);
                   $row=  mysqli_fetch_assoc($res);
                   $approveremail=$row['Name'];
                   $approveremail1=$row['RegisterNumber'];
                   $approveremail2=$row['Exam'];
                   $approveremail3=$row['English'];
                   $approveremail4=$row['Tamil'];
                   $approveremail5=$row['Maths'];
                   $approveremail6=$row['Science'];
                   $approveremail7=$row['Social'];
                   $approveremail8=$row['Result'];
                   $approveremail9=$row['Total'];
                   $approveremail10=$row['Email'];
                   $msg = " Name : $approveremail \n Register Number : $approveremail1 \n Exam : $approveremail2 \n English : $approveremail3 \n Tamil : $approveremail4 \n Maths : $approveremail5 \n Science : $approveremail6 \n Social : $approveremail7 \n Result : $approveremail8 \n Total : $approveremail9";
                   // use wordwrap() if lines are longer than 70 characters
                   $msg = wordwrap($msg,70);
                   // send email
                   $k=mail("$approveremail10","Exam Marks",$msg);
                   if($k)
                    {
                        echo "<script value='text/javascript'>alert('Mail Sended !!');location='stviewmarks.php';</script>";
                    }
                  else 
                    {
                        echo "<script value='text/javascript'>alert('Mail Not Sended !!');location='stviewmarks.php';</script>";
                    }
                }         
                elseif($rnum == "5A009" && $car == "Annual")
                {
                   $query="select * from viewmark where RegisterNumber='5A009' and Exam='Annual'";
                   $res=mysqli_query($conn,$query);
                   $row=  mysqli_fetch_assoc($res);
                   $approveremail=$row['Name'];
                   $approveremail1=$row['RegisterNumber'];
                   $approveremail2=$row['Exam'];
                   $approveremail3=$row['English'];
                   $approveremail4=$row['Tamil'];
                   $approveremail5=$row['Maths'];
                   $approveremail6=$row['Science'];
                   $approveremail7=$row['Social'];
                   $approveremail8=$row['Result'];
                   $approveremail9=$row['Total'];
                   $approveremail10=$row['Email'];
                   $msg = " Name : $approveremail \n Register Number : $approveremail1 \n Exam : $approveremail2 \n English : $approveremail3 \n Tamil : $approveremail4 \n Maths : $approveremail5 \n Science : $approveremail6 \n Social : $approveremail7 \n Result : $approveremail8 \n Total : $approveremail9";
                   // use wordwrap() if lines are longer than 70 characters
                   $msg = wordwrap($msg,70);
                   // send email
                   $k=mail("$approveremail10","Exam Marks",$msg);
                   if($k)
                    {
                        echo "<script value='text/javascript'>alert('Mail Sended !!');location='stviewmarks.php';</script>";
                    }
                  else 
                    {
                        echo "<script value='text/javascript'>alert('Mail Not Sended !!');location='stviewmarks.php';</script>";
                    }
                }         
                elseif($rnum == "5A010" && $car == "Annual")
                {
                   $query="select * from viewmark where RegisterNumber='5A010' and Exam='Annual'";
                   $res=mysqli_query($conn,$query);
                   $row=  mysqli_fetch_assoc($res);
                   $approveremail=$row['Name'];
                   $approveremail1=$row['RegisterNumber'];
                   $approveremail2=$row['Exam'];
                   $approveremail3=$row['English'];
                   $approveremail4=$row['Tamil'];
                   $approveremail5=$row['Maths'];
                   $approveremail6=$row['Science'];
                   $approveremail7=$row['Social'];
                   $approveremail8=$row['Result'];
                   $approveremail9=$row['Total'];
                   $approveremail10=$row['Email'];
                   $msg = " Name : $approveremail \n Register Number : $approveremail1 \n Exam : $approveremail2 \n English : $approveremail3 \n Tamil : $approveremail4 \n Maths : $approveremail5 \n Science : $approveremail6 \n Social : $approveremail7 \n Result : $approveremail8 \n Total : $approveremail9";
                   // use wordwrap() if lines are longer than 70 characters
                   $msg = wordwrap($msg,70);
                   // send email
                   $k=mail("$approveremail10","Exam Marks",$msg);
                   if($k)
                    {
                        echo "<script value='text/javascript'>alert('Mail Sended !!');location='stviewmarks.php';</script>";
                    }
                  else 
                    {
                        echo "<script value='text/javascript'>alert('Mail Not Sended !!');location='stviewmarks.php';</script>";
                    }
                }         
                elseif($rnum == "5A011" && $car == "Annual")
                {
                   $query="select * from viewmark where RegisterNumber='5A011' and Exam='Annual'";
                   $res=mysqli_query($conn,$query);
                   $row=  mysqli_fetch_assoc($res);
                   $approveremail=$row['Name'];
                   $approveremail1=$row['RegisterNumber'];
                   $approveremail2=$row['Exam'];
                   $approveremail3=$row['English'];
                   $approveremail4=$row['Tamil'];
                   $approveremail5=$row['Maths'];
                   $approveremail6=$row['Science'];
                   $approveremail7=$row['Social'];
                   $approveremail8=$row['Result'];
                   $approveremail9=$row['Total'];
                   $approveremail10=$row['Email'];
                   $msg = " Name : $approveremail \n Register Number : $approveremail1 \n Exam : $approveremail2 \n English : $approveremail3 \n Tamil : $approveremail4 \n Maths : $approveremail5 \n Science : $approveremail6 \n Social : $approveremail7 \n Result : $approveremail8 \n Total : $approveremail9";
                   // use wordwrap() if lines are longer than 70 characters
                   $msg = wordwrap($msg,70);
                   // send email
                   $k=mail("$approveremail10","Exam Marks",$msg);
                   if($k)
                    {
                        echo "<script value='text/javascript'>alert('Mail Sended !!');location='stviewmarks.php';</script>";
                    }
                  else 
                    {
                        echo "<script value='text/javascript'>alert('Mail Not Sended !!');location='stviewmarks.php';</script>";
                    }
                }         
                elseif($rnum == "5A012" && $car == "Annual")
                {
                   $query="select * from viewmark where RegisterNumber='5A012' and Exam='Annual'";
                   $res=mysqli_query($conn,$query);
                   $row=  mysqli_fetch_assoc($res);
                   $approveremail=$row['Name'];
                   $approveremail1=$row['RegisterNumber'];
                   $approveremail2=$row['Exam'];
                   $approveremail3=$row['English'];
                   $approveremail4=$row['Tamil'];
                   $approveremail5=$row['Maths'];
                   $approveremail6=$row['Science'];
                   $approveremail7=$row['Social'];
                   $approveremail8=$row['Result'];
                   $approveremail9=$row['Total'];
                   $approveremail10=$row['Email'];
                   $msg = " Name : $approveremail \n Register Number : $approveremail1 \n Exam : $approveremail2 \n English : $approveremail3 \n Tamil : $approveremail4 \n Maths : $approveremail5 \n Science : $approveremail6 \n Social : $approveremail7 \n Result : $approveremail8 \n Total : $approveremail9";
                   // use wordwrap() if lines are longer than 70 characters
                   $msg = wordwrap($msg,70);
                   // send email
                   $k=mail("$approveremail10","Exam Marks",$msg);
                   if($k)
                    {
                        echo "<script value='text/javascript'>alert('Mail Sended !!');location='stviewmarks.php';</script>";
                    }
                  else 
                    {
                        echo "<script value='text/javascript'>alert('Mail Not Sended !!');location='stviewmarks.php';</script>";
                    }
                }         
                elseif($rnum == "5A013" && $car == "Annual")
                {
                   $query="select * from viewmark where RegisterNumber='5A013' and Exam='Annual'";
                   $res=mysqli_query($conn,$query);
                   $row=  mysqli_fetch_assoc($res);
                   $approveremail=$row['Name'];
                   $approveremail1=$row['RegisterNumber'];
                   $approveremail2=$row['Exam'];
                   $approveremail3=$row['English'];
                   $approveremail4=$row['Tamil'];
                   $approveremail5=$row['Maths'];
                   $approveremail6=$row['Science'];
                   $approveremail7=$row['Social'];
                   $approveremail8=$row['Result'];
                   $approveremail9=$row['Total'];
                   $approveremail10=$row['Email'];
                   $msg = " Name : $approveremail \n Register Number : $approveremail1 \n Exam : $approveremail2 \n English : $approveremail3 \n Tamil : $approveremail4 \n Maths : $approveremail5 \n Science : $approveremail6 \n Social : $approveremail7 \n Result : $approveremail8 \n Total : $approveremail9";
                   // use wordwrap() if lines are longer than 70 characters
                   $msg = wordwrap($msg,70);
                   // send email
                   $k=mail("$approveremail10","Exam Marks",$msg);
                   if($k)
                    {
                        echo "<script value='text/javascript'>alert('Mail Sended !!');location='stviewmarks.php';</script>";
                    }
                  else 
                    {
                        echo "<script value='text/javascript'>alert('Mail Not Sended !!');location='stviewmarks.php';</script>";
                    }
                }         
             else
             {
                        echo "<script value='text/javascript'>alert('Mail Not Sended Invalid Data !!');location='stviewmarks.php';</script>";
             }
}
?>