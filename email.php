<?php
            $conn=mysqli_connect('localhost','root','','college');
            if($conn)
            {
                $query="select * from viewmark";
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
                    echo 'success..';
                 }
               else 
                  {
                      echo 'failed..'; 
                  }
             
            }
 ?>