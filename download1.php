<?php
$conn=mysqli_connect('localhost','root','','college');
if($conn)
{
    $rnum=$_POST['reg1'];
    $exam=$_POST['cars'];
    if($rnum == "5A001" && $exam == "Quarterly")
    {
      $query="select * from viewmark where RegisterNumber='5A001' and Exam='Quarterly'";
      $res=mysqli_query($conn,$query);
      while($result=  mysqli_fetch_assoc($res))
        {
          ob_start();
          include_once 'fpdf/fpdf.php';
          $pdf=new FPDF('P','mm','A4');
          $pdf->AddPage();
          $pdf->SetFont("Arial","B","17");
          $pdf->setTextcolor(252,3,3);
          $pdf->cell(190,20,"Student's Academic Performance","1","1","C");
          $pdf->SetLeftMargin(30);
          $pdf->setTextColor(0,0,0);
          $pdf->Ln();
          $pdf->cell(150,20,"Examination Mark","1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Name","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Name'],"1","1","C");
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Register Number","1","0","C");  
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['RegisterNumber'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Exam","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Exam'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"English","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['English'],"1","0","C");          
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Tamil","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Tamil'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Maths","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Maths'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Science","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Science'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Social","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Social'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Result","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Result'],"1","0","C");          
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Total","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Total'],"1","0","C");
        }
    }
    elseif($rnum == "5A002" && $exam == "Quarterly")
    {
      $query="select * from viewmark where RegisterNumber='5A002' and Exam='Quarterly'";
      $res=mysqli_query($conn,$query);
      while($result=  mysqli_fetch_assoc($res))
        {
          ob_start();
          include_once 'fpdf/fpdf.php';
          $pdf=new FPDF('P','mm','A4');
          $pdf->AddPage();
          $pdf->SetFont("Arial","B","17");
          $pdf->setTextcolor(252,3,3);
          $pdf->cell(190,20,"Student's Academic Performance","1","1","C");
          $pdf->SetLeftMargin(30);
          $pdf->setTextColor(0,0,0);
          $pdf->Ln();
          $pdf->cell(150,20,"Examination Mark","1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Name","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Name'],"1","1","C");
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Register Number","1","0","C");  
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['RegisterNumber'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Exam","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Exam'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"English","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['English'],"1","0","C");          
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Tamil","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Tamil'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Maths","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Maths'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Science","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Science'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Social","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Social'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Result","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Result'],"1","0","C");          
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Total","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Total'],"1","0","C");
        }        
        
    }
    elseif($rnum == "5A003" && $exam == "Quarterly")
    {
      $query="select * from viewmark where RegisterNumber='5A003' and Exam='Quarterly'";
      $res=mysqli_query($conn,$query);
      while($result=  mysqli_fetch_assoc($res))
        {
          ob_start();
          include_once 'fpdf/fpdf.php';
          $pdf=new FPDF('P','mm','A4');
          $pdf->AddPage();
          $pdf->SetFont("Arial","B","17");
          $pdf->setTextcolor(252,3,3);
          $pdf->cell(190,20,"Student's Academic Performance","1","1","C");
          $pdf->SetLeftMargin(30);
          $pdf->setTextColor(0,0,0);
          $pdf->Ln();
          $pdf->cell(150,20,"Examination Mark","1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Name","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Name'],"1","1","C");
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Register Number","1","0","C");  
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['RegisterNumber'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Exam","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Exam'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"English","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['English'],"1","0","C");          
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Tamil","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Tamil'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Maths","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Maths'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Science","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Science'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Social","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Social'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Result","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Result'],"1","0","C");          
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Total","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Total'],"1","0","C");
        }        
        
    }
    elseif($rnum == "5A004" && $exam == "Quarterly")
    {
      $query="select * from viewmark where RegisterNumber='5A004' and Exam='Quarterly'";
      $res=mysqli_query($conn,$query);
      while($result=  mysqli_fetch_assoc($res))
        {
          ob_start();
          include_once 'fpdf/fpdf.php';
          $pdf=new FPDF('P','mm','A4');
          $pdf->AddPage();
          $pdf->SetFont("Arial","B","17");
          $pdf->setTextcolor(252,3,3);
          $pdf->cell(190,20,"Student's Academic Performance","1","1","C");
          $pdf->SetLeftMargin(30);
          $pdf->setTextColor(0,0,0);
          $pdf->Ln();
          $pdf->cell(150,20,"Examination Mark","1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Name","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Name'],"1","1","C");
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Register Number","1","0","C");  
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['RegisterNumber'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Exam","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Exam'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"English","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['English'],"1","0","C");          
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Tamil","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Tamil'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Maths","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Maths'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Science","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Science'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Social","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Social'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Result","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Result'],"1","0","C");          
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Total","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Total'],"1","0","C");
        }        
        
    }
    elseif($rnum == "5A005" && $exam == "Quarterly")
    {
      $query="select * from viewmark where RegisterNumber='5A005' and Exam='Quarterly'";
      $res=mysqli_query($conn,$query);
      while($result=  mysqli_fetch_assoc($res))
        {
          ob_start();
          include_once 'fpdf/fpdf.php';
          $pdf=new FPDF('P','mm','A4');
          $pdf->AddPage();
          $pdf->SetFont("Arial","B","17");
          $pdf->setTextcolor(252,3,3);
          $pdf->cell(190,20,"Student's Academic Performance","1","1","C");
          $pdf->SetLeftMargin(30);
          $pdf->setTextColor(0,0,0);
          $pdf->Ln();
          $pdf->cell(150,20,"Examination Mark","1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Name","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Name'],"1","1","C");
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Register Number","1","0","C");  
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['RegisterNumber'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Exam","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Exam'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"English","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['English'],"1","0","C");          
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Tamil","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Tamil'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Maths","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Maths'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Science","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Science'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Social","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Social'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Result","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Result'],"1","0","C");          
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Total","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Total'],"1","0","C");
        }        
        
    }
    elseif($rnum == "5A006" && $exam == "Quarterly")
    {
      $query="select * from viewmark where RegisterNumber='5A006' and Exam='Quarterly'";
      $res=mysqli_query($conn,$query);
      while($result=  mysqli_fetch_assoc($res))
        {
          ob_start();
          include_once 'fpdf/fpdf.php';
          $pdf=new FPDF('P','mm','A4');
          $pdf->AddPage();
          $pdf->SetFont("Arial","B","17");
          $pdf->setTextcolor(252,3,3);
          $pdf->cell(190,20,"Student's Academic Performance","1","1","C");
          $pdf->SetLeftMargin(30);
          $pdf->setTextColor(0,0,0);
          $pdf->Ln();
          $pdf->cell(150,20,"Examination Mark","1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Name","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Name'],"1","1","C");
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Register Number","1","0","C");  
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['RegisterNumber'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Exam","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Exam'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"English","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['English'],"1","0","C");          
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Tamil","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Tamil'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Maths","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Maths'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Science","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Science'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Social","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Social'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Result","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Result'],"1","0","C");          
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Total","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Total'],"1","0","C");
        }        
        
    }
    elseif($rnum == "5A007" && $exam == "Quarterly")
    {
      $query="select * from viewmark where RegisterNumber='5A007' and Exam='Quarterly'";
      $res=mysqli_query($conn,$query);
      while($result=  mysqli_fetch_assoc($res))
        {
          ob_start();
          include_once 'fpdf/fpdf.php';
          $pdf=new FPDF('P','mm','A4');
          $pdf->AddPage();
          $pdf->SetFont("Arial","B","17");
          $pdf->setTextcolor(252,3,3);
          $pdf->cell(190,20,"Student's Academic Performance","1","1","C");
          $pdf->SetLeftMargin(30);
          $pdf->setTextColor(0,0,0);
          $pdf->Ln();
          $pdf->cell(150,20,"Examination Mark","1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Name","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Name'],"1","1","C");
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Register Number","1","0","C");  
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['RegisterNumber'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Exam","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Exam'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"English","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['English'],"1","0","C");          
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Tamil","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Tamil'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Maths","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Maths'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Science","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Science'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Social","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Social'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Result","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Result'],"1","0","C");          
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Total","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Total'],"1","0","C");
        }        
        
    }
    elseif($rnum == "5A008" && $exam == "Quarterly")
    {
      $query="select * from viewmark where RegisterNumber='5A008' and Exam='Quarterly'";
      $res=mysqli_query($conn,$query);
      while($result=  mysqli_fetch_assoc($res))
        {
          ob_start();
          include_once 'fpdf/fpdf.php';
          $pdf=new FPDF('P','mm','A4');
          $pdf->AddPage();
          $pdf->SetFont("Arial","B","17");
          $pdf->setTextcolor(252,3,3);
          $pdf->cell(190,20,"Student's Academic Performance","1","1","C");
          $pdf->SetLeftMargin(30);
          $pdf->setTextColor(0,0,0);
          $pdf->Ln();
          $pdf->cell(150,20,"Examination Mark","1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Name","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Name'],"1","1","C");
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Register Number","1","0","C");  
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['RegisterNumber'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Exam","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Exam'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"English","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['English'],"1","0","C");          
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Tamil","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Tamil'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Maths","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Maths'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Science","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Science'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Social","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Social'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Result","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Result'],"1","0","C");          
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Total","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Total'],"1","0","C");
        }        
        
    }
    elseif($rnum == "5A009" && $exam == "Quarterly")
    {
      $query="select * from viewmark where RegisterNumber='5A009' and Exam='Quarterly'";
      $res=mysqli_query($conn,$query);
      while($result=  mysqli_fetch_assoc($res))
        {
          ob_start();
          include_once 'fpdf/fpdf.php';
          $pdf=new FPDF('P','mm','A4');
          $pdf->AddPage();
          $pdf->SetFont("Arial","B","17");
          $pdf->setTextcolor(252,3,3);
          $pdf->cell(190,20,"Student's Academic Performance","1","1","C");
          $pdf->SetLeftMargin(30);
          $pdf->setTextColor(0,0,0);
          $pdf->Ln();
          $pdf->cell(150,20,"Examination Mark","1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Name","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Name'],"1","1","C");
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Register Number","1","0","C");  
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['RegisterNumber'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Exam","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Exam'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"English","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['English'],"1","0","C");          
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Tamil","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Tamil'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Maths","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Maths'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Science","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Science'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Social","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Social'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Result","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Result'],"1","0","C");          
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Total","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Total'],"1","0","C");
        }        
        
    }
    elseif($rnum == "5A010" && $exam == "Quarterly")
    {
      $query="select * from viewmark where RegisterNumber='5A010' and Exam='Quarterly'";
      $res=mysqli_query($conn,$query);
      while($result=  mysqli_fetch_assoc($res))
        {
          ob_start();
          include_once 'fpdf/fpdf.php';
          $pdf=new FPDF('P','mm','A4');
          $pdf->AddPage();
          $pdf->SetFont("Arial","B","17");
          $pdf->setTextcolor(252,3,3);
          $pdf->cell(190,20,"Student's Academic Performance","1","1","C");
          $pdf->SetLeftMargin(30);
          $pdf->setTextColor(0,0,0);
          $pdf->Ln();
          $pdf->cell(150,20,"Examination Mark","1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Name","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Name'],"1","1","C");
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Register Number","1","0","C");  
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['RegisterNumber'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Exam","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Exam'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"English","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['English'],"1","0","C");          
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Tamil","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Tamil'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Maths","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Maths'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Science","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Science'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Social","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Social'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Result","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Result'],"1","0","C");          
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Total","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Total'],"1","0","C");
        }        
        
    }
    elseif($rnum == "5A011" && $exam == "Quarterly")
    {
      $query="select * from viewmark where RegisterNumber='5A011' and Exam='Quarterly'";
      $res=mysqli_query($conn,$query);
      while($result=  mysqli_fetch_assoc($res))
        {
          ob_start();
          include_once 'fpdf/fpdf.php';
          $pdf=new FPDF('P','mm','A4');
          $pdf->AddPage();
          $pdf->SetFont("Arial","B","17");
          $pdf->setTextcolor(252,3,3);
          $pdf->cell(190,20,"Student's Academic Performance","1","1","C");
          $pdf->SetLeftMargin(30);
          $pdf->setTextColor(0,0,0);
          $pdf->Ln();
          $pdf->cell(150,20,"Examination Mark","1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Name","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Name'],"1","1","C");
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Register Number","1","0","C");  
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['RegisterNumber'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Exam","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Exam'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"English","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['English'],"1","0","C");          
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Tamil","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Tamil'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Maths","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Maths'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Science","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Science'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Social","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Social'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Result","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Result'],"1","0","C");          
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Total","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Total'],"1","0","C");
        }        
        
    }
    elseif($rnum == "5A012" && $exam == "Quarterly")
    {
      $query="select * from viewmark where RegisterNumber='5A012' and Exam='Quarterly'";
      $res=mysqli_query($conn,$query);
      while($result=  mysqli_fetch_assoc($res))
        {
          ob_start();
          include_once 'fpdf/fpdf.php';
          $pdf=new FPDF('P','mm','A4');
          $pdf->AddPage();
          $pdf->SetFont("Arial","B","17");
          $pdf->setTextcolor(252,3,3);
          $pdf->cell(190,20,"Student's Academic Performance","1","1","C");
          $pdf->SetLeftMargin(30);
          $pdf->setTextColor(0,0,0);
          $pdf->Ln();
          $pdf->cell(150,20,"Examination Mark","1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Name","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Name'],"1","1","C");
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Register Number","1","0","C");  
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['RegisterNumber'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Exam","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Exam'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"English","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['English'],"1","0","C");          
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Tamil","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Tamil'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Maths","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Maths'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Science","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Science'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Social","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Social'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Result","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Result'],"1","0","C");          
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Total","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Total'],"1","0","C");
        }        
        
    }
    elseif($rnum == "5A001" && $exam == "Halfyearly")
    {
      $query="select * from viewmark where RegisterNumber='5A001' and Exam='Half yearly'";
      $res=mysqli_query($conn,$query);
      while($result=  mysqli_fetch_assoc($res))
        {
          ob_start();
          include_once 'fpdf/fpdf.php';
          $pdf=new FPDF('P','mm','A4');
          $pdf->AddPage();
          $pdf->SetFont("Arial","B","17");
          $pdf->setTextcolor(252,3,3);
          $pdf->cell(190,20,"Student's Academic Performance","1","1","C");
          $pdf->SetLeftMargin(30);
          $pdf->setTextColor(0,0,0);
          $pdf->Ln();
          $pdf->cell(150,20,"Examination Mark","1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Name","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Name'],"1","1","C");
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Register Number","1","0","C");  
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['RegisterNumber'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Exam","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Exam'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"English","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['English'],"1","0","C");          
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Tamil","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Tamil'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Maths","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Maths'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Science","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Science'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Social","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Social'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Result","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Result'],"1","0","C");          
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Total","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Total'],"1","0","C");
        }        
        
    }
    elseif($rnum == "5A002" && $exam == "Halfyearly")
    {
      $query="select * from viewmark where RegisterNumber='5A002' and Exam='Half yearly'";
      $res=mysqli_query($conn,$query);
      while($result=  mysqli_fetch_assoc($res))
        {
          ob_start();
          include_once 'fpdf/fpdf.php';
          $pdf=new FPDF('P','mm','A4');
          $pdf->AddPage();
          $pdf->SetFont("Arial","B","17");
          $pdf->setTextcolor(252,3,3);
          $pdf->cell(190,20,"Student's Academic Performance","1","1","C");
          $pdf->SetLeftMargin(30);
          $pdf->setTextColor(0,0,0);
          $pdf->Ln();
          $pdf->cell(150,20,"Examination Mark","1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Name","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Name'],"1","1","C");
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Register Number","1","0","C");  
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['RegisterNumber'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Exam","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Exam'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"English","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['English'],"1","0","C");          
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Tamil","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Tamil'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Maths","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Maths'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Science","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Science'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Social","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Social'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Result","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Result'],"1","0","C");          
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Total","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Total'],"1","0","C");
        }        
        
    }
    elseif($rnum == "5A003" && $exam == "Halfyearly")
    {
      $query="select * from viewmark where RegisterNumber='5A003' and Exam='Half yearly'";
      $res=mysqli_query($conn,$query);
      while($result=  mysqli_fetch_assoc($res))
        {
          ob_start();
          include_once 'fpdf/fpdf.php';
          $pdf=new FPDF('P','mm','A4');
          $pdf->AddPage();
          $pdf->SetFont("Arial","B","17");
          $pdf->setTextcolor(252,3,3);
          $pdf->cell(190,20,"Student's Academic Performance","1","1","C");
          $pdf->SetLeftMargin(30);
          $pdf->setTextColor(0,0,0);
          $pdf->Ln();
          $pdf->cell(150,20,"Examination Mark","1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Name","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Name'],"1","1","C");
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Register Number","1","0","C");  
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['RegisterNumber'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Exam","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Exam'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"English","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['English'],"1","0","C");          
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Tamil","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Tamil'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Maths","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Maths'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Science","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Science'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Social","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Social'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Result","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Result'],"1","0","C");          
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Total","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Total'],"1","0","C");
        }        
        
    }
    elseif($rnum == "5A004" && $exam == "Halfyearly")
    {
      $query="select * from viewmark where RegisterNumber='5A004' and Exam='Half yearly'";
      $res=mysqli_query($conn,$query);
      while($result=  mysqli_fetch_assoc($res))
        {
          ob_start();
          include_once 'fpdf/fpdf.php';
          $pdf=new FPDF('P','mm','A4');
          $pdf->AddPage();
          $pdf->SetFont("Arial","B","17");
          $pdf->setTextcolor(252,3,3);
          $pdf->cell(190,20,"Student's Academic Performance","1","1","C");
          $pdf->SetLeftMargin(30);
          $pdf->setTextColor(0,0,0);
          $pdf->Ln();
          $pdf->cell(150,20,"Examination Mark","1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Name","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Name'],"1","1","C");
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Register Number","1","0","C");  
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['RegisterNumber'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Exam","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Exam'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"English","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['English'],"1","0","C");          
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Tamil","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Tamil'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Maths","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Maths'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Science","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Science'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Social","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Social'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Result","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Result'],"1","0","C");          
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Total","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Total'],"1","0","C");
        }        
        
    }
    elseif($rnum == "5A005" && $exam == "Halfyearly")
    {
      $query="select * from viewmark where RegisterNumber='5A005' and Exam='Half yearly'";
      $res=mysqli_query($conn,$query);
      while($result=  mysqli_fetch_assoc($res))
        {
          ob_start();
          include_once 'fpdf/fpdf.php';
          $pdf=new FPDF('P','mm','A4');
          $pdf->AddPage();
          $pdf->SetFont("Arial","B","17");
          $pdf->setTextcolor(252,3,3);
          $pdf->cell(190,20,"Student's Academic Performance","1","1","C");
          $pdf->SetLeftMargin(30);
          $pdf->setTextColor(0,0,0);
          $pdf->Ln();
          $pdf->cell(150,20,"Examination Mark","1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Name","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Name'],"1","1","C");
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Register Number","1","0","C");  
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['RegisterNumber'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Exam","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Exam'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"English","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['English'],"1","0","C");          
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Tamil","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Tamil'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Maths","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Maths'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Science","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Science'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Social","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Social'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Result","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Result'],"1","0","C");          
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Total","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Total'],"1","0","C");
        }        
        
    }
    elseif($rnum == "5A006" && $exam == "Halfyearly")
    {
      $query="select * from viewmark where RegisterNumber='5A006' and Exam='Half yearly'";
      $res=mysqli_query($conn,$query);
      while($result=  mysqli_fetch_assoc($res))
        {
          ob_start();
          include_once 'fpdf/fpdf.php';
          $pdf=new FPDF('P','mm','A4');
          $pdf->AddPage();
          $pdf->SetFont("Arial","B","17");
          $pdf->setTextcolor(252,3,3);
          $pdf->cell(190,20,"Student's Academic Performance","1","1","C");
          $pdf->SetLeftMargin(30);
          $pdf->setTextColor(0,0,0);
          $pdf->Ln();
          $pdf->cell(150,20,"Examination Mark","1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Name","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Name'],"1","1","C");
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Register Number","1","0","C");  
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['RegisterNumber'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Exam","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Exam'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"English","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['English'],"1","0","C");          
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Tamil","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Tamil'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Maths","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Maths'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Science","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Science'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Social","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Social'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Result","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Result'],"1","0","C");          
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Total","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Total'],"1","0","C");
        }        
        
    }
    elseif($rnum == "5A007" && $exam == "Halfyearly")
    {
      $query="select * from viewmark where RegisterNumber='5A007' and Exam='Half yearly'";
      $res=mysqli_query($conn,$query);
      while($result=  mysqli_fetch_assoc($res))
        {
          ob_start();
          include_once 'fpdf/fpdf.php';
          $pdf=new FPDF('P','mm','A4');
          $pdf->AddPage();
          $pdf->SetFont("Arial","B","17");
          $pdf->setTextcolor(252,3,3);
          $pdf->cell(190,20,"Student's Academic Performance","1","1","C");
          $pdf->SetLeftMargin(30);
          $pdf->setTextColor(0,0,0);
          $pdf->Ln();
          $pdf->cell(150,20,"Examination Mark","1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Name","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Name'],"1","1","C");
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Register Number","1","0","C");  
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['RegisterNumber'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Exam","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Exam'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"English","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['English'],"1","0","C");          
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Tamil","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Tamil'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Maths","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Maths'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Science","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Science'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Social","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Social'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Result","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Result'],"1","0","C");          
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Total","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Total'],"1","0","C");
        }        
        
    }
    elseif($rnum == "5A008" && $exam == "Halfyearly")
    {
      $query="select * from viewmark where RegisterNumber='5A008' and Exam='Half yearly'";
      $res=mysqli_query($conn,$query);
      while($result=  mysqli_fetch_assoc($res))
        {
          ob_start();
          include_once 'fpdf/fpdf.php';
          $pdf=new FPDF('P','mm','A4');
          $pdf->AddPage();
          $pdf->SetFont("Arial","B","17");
          $pdf->setTextcolor(252,3,3);
          $pdf->cell(190,20,"Student's Academic Performance","1","1","C");
          $pdf->SetLeftMargin(30);
          $pdf->setTextColor(0,0,0);
          $pdf->Ln();
          $pdf->cell(150,20,"Examination Mark","1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Name","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Name'],"1","1","C");
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Register Number","1","0","C");  
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['RegisterNumber'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Exam","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Exam'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"English","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['English'],"1","0","C");          
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Tamil","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Tamil'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Maths","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Maths'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Science","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Science'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Social","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Social'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Result","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Result'],"1","0","C");          
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Total","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Total'],"1","0","C");
        }        
        
    }
    elseif($rnum == "5A009" && $exam == "Halfyearly")
    {
      $query="select * from viewmark where RegisterNumber='5A009' and Exam='Half yearly'";
      $res=mysqli_query($conn,$query);
      while($result=  mysqli_fetch_assoc($res))
        {
          ob_start();
          include_once 'fpdf/fpdf.php';
          $pdf=new FPDF('P','mm','A4');
          $pdf->AddPage();
          $pdf->SetFont("Arial","B","17");
          $pdf->setTextcolor(252,3,3);
          $pdf->cell(190,20,"Student's Academic Performance","1","1","C");
          $pdf->SetLeftMargin(30);
          $pdf->setTextColor(0,0,0);
          $pdf->Ln();
          $pdf->cell(150,20,"Examination Mark","1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Name","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Name'],"1","1","C");
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Register Number","1","0","C");  
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['RegisterNumber'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Exam","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Exam'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"English","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['English'],"1","0","C");          
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Tamil","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Tamil'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Maths","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Maths'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Science","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Science'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Social","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Social'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Result","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Result'],"1","0","C");          
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Total","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Total'],"1","0","C");
        }        
        
    }
    elseif($rnum == "5A010" && $exam == "Halfyearly")
    {
      $query="select * from viewmark where RegisterNumber='5A010' and Exam='Half yearly'";
      $res=mysqli_query($conn,$query);
      while($result=  mysqli_fetch_assoc($res))
        {
          ob_start();
          include_once 'fpdf/fpdf.php';
          $pdf=new FPDF('P','mm','A4');
          $pdf->AddPage();
          $pdf->SetFont("Arial","B","17");
          $pdf->setTextcolor(252,3,3);
          $pdf->cell(190,20,"Student's Academic Performance","1","1","C");
          $pdf->SetLeftMargin(30);
          $pdf->setTextColor(0,0,0);
          $pdf->Ln();
          $pdf->cell(150,20,"Examination Mark","1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Name","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Name'],"1","1","C");
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Register Number","1","0","C");  
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['RegisterNumber'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Exam","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Exam'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"English","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['English'],"1","0","C");          
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Tamil","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Tamil'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Maths","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Maths'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Science","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Science'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Social","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Social'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Result","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Result'],"1","0","C");          
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Total","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Total'],"1","0","C");
        }        
        
    }
    elseif($rnum == "5A011" && $exam == "Halfyearly")
    {
      $query="select * from viewmark where RegisterNumber='5A011' and Exam='Half yearly'";
      $res=mysqli_query($conn,$query);
      while($result=  mysqli_fetch_assoc($res))
        {
          ob_start();
          include_once 'fpdf/fpdf.php';
          $pdf=new FPDF('P','mm','A4');
          $pdf->AddPage();
          $pdf->SetFont("Arial","B","17");
          $pdf->setTextcolor(252,3,3);
          $pdf->cell(190,20,"Student's Academic Performance","1","1","C");
          $pdf->SetLeftMargin(30);
          $pdf->setTextColor(0,0,0);
          $pdf->Ln();
          $pdf->cell(150,20,"Examination Mark","1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Name","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Name'],"1","1","C");
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Register Number","1","0","C");  
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['RegisterNumber'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Exam","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Exam'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"English","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['English'],"1","0","C");          
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Tamil","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Tamil'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Maths","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Maths'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Science","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Science'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Social","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Social'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Result","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Result'],"1","0","C");          
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Total","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Total'],"1","0","C");
        }        
        
    }
    elseif($rnum == "5A012" && $exam == "Halfyearly")
    {
      $query="select * from viewmark where RegisterNumber='5A012' and Exam='Half yearly'";
      $res=mysqli_query($conn,$query);
      while($result=  mysqli_fetch_assoc($res))
        {
          ob_start();
          include_once 'fpdf/fpdf.php';
          $pdf=new FPDF('P','mm','A4');
          $pdf->AddPage();
          $pdf->SetFont("Arial","B","17");
          $pdf->setTextcolor(252,3,3);
          $pdf->cell(190,20,"Student's Academic Performance","1","1","C");
          $pdf->SetLeftMargin(30);
          $pdf->setTextColor(0,0,0);
          $pdf->Ln();
          $pdf->cell(150,20,"Examination Mark","1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Name","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Name'],"1","1","C");
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Register Number","1","0","C");  
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['RegisterNumber'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Exam","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Exam'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"English","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['English'],"1","0","C");          
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Tamil","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Tamil'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Maths","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Maths'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Science","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Science'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Social","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Social'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Result","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Result'],"1","0","C");          
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Total","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Total'],"1","0","C");
        }        
        
    }
    elseif($rnum == "5A001" && $exam == "Annual")
    {
      $query="select * from viewmark where RegisterNumber='5A001' and Exam='Annual'";
      $res=mysqli_query($conn,$query);
      while($result=  mysqli_fetch_assoc($res))
        {
          ob_start();
          include_once 'fpdf/fpdf.php';
          $pdf=new FPDF('P','mm','A4');
          $pdf->AddPage();
          $pdf->SetFont("Arial","B","17");
          $pdf->setTextcolor(252,3,3);
          $pdf->cell(190,20,"Student's Academic Performance","1","1","C");
          $pdf->SetLeftMargin(30);
          $pdf->setTextColor(0,0,0);
          $pdf->Ln();
          $pdf->cell(150,20,"Examination Mark","1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Name","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Name'],"1","1","C");
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Register Number","1","0","C");  
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['RegisterNumber'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Exam","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Exam'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"English","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['English'],"1","0","C");          
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Tamil","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Tamil'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Maths","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Maths'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Science","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Science'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Social","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Social'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Result","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Result'],"1","0","C");          
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Total","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Total'],"1","0","C");
        }        
        
    }
    elseif($rnum == "5A002" && $exam == "Annual")
    {
      $query="select * from viewmark where RegisterNumber='5A002' and Exam='Annual'";
      $res=mysqli_query($conn,$query);
      while($result=  mysqli_fetch_assoc($res))
        {
          ob_start();
          include_once 'fpdf/fpdf.php';
          $pdf=new FPDF('P','mm','A4');
          $pdf->AddPage();
          $pdf->SetFont("Arial","B","17");
          $pdf->setTextcolor(252,3,3);
          $pdf->cell(190,20,"Student's Academic Performance","1","1","C");
          $pdf->SetLeftMargin(30);
          $pdf->setTextColor(0,0,0);
          $pdf->Ln();
          $pdf->cell(150,20,"Examination Mark","1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Name","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Name'],"1","1","C");
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Register Number","1","0","C");  
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['RegisterNumber'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Exam","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Exam'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"English","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['English'],"1","0","C");          
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Tamil","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Tamil'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Maths","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Maths'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Science","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Science'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Social","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Social'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Result","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Result'],"1","0","C");          
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Total","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Total'],"1","0","C");
        }        
        
    }
    elseif($rnum == "5A003" && $exam == "Annual")
    {
      $query="select * from viewmark where RegisterNumber='5A003' and Exam='Annual'";
      $res=mysqli_query($conn,$query);
      while($result=  mysqli_fetch_assoc($res))
        {
          ob_start();
          include_once 'fpdf/fpdf.php';
          $pdf=new FPDF('P','mm','A4');
          $pdf->AddPage();
          $pdf->SetFont("Arial","B","17");
          $pdf->setTextcolor(252,3,3);
          $pdf->cell(190,20,"Student's Academic Performance","1","1","C");
          $pdf->SetLeftMargin(30);
          $pdf->setTextColor(0,0,0);
          $pdf->Ln();
          $pdf->cell(150,20,"Examination Mark","1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Name","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Name'],"1","1","C");
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Register Number","1","0","C");  
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['RegisterNumber'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Exam","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Exam'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"English","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['English'],"1","0","C");          
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Tamil","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Tamil'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Maths","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Maths'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Science","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Science'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Social","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Social'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Result","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Result'],"1","0","C");          
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Total","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Total'],"1","0","C");
        }        
        
    }
    elseif($rnum == "5A004" && $exam == "Annual")
    {
      $query="select * from viewmark where RegisterNumber='5A004' and Exam='Annual'";
      $res=mysqli_query($conn,$query);
      while($result=  mysqli_fetch_assoc($res))
        {
          ob_start();
          include_once 'fpdf/fpdf.php';
          $pdf=new FPDF('P','mm','A4');
          $pdf->AddPage();
          $pdf->SetFont("Arial","B","17");
          $pdf->setTextcolor(252,3,3);
          $pdf->cell(190,20,"Student's Academic Performance","1","1","C");
          $pdf->SetLeftMargin(30);
          $pdf->setTextColor(0,0,0);
          $pdf->Ln();
          $pdf->cell(150,20,"Examination Mark","1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Name","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Name'],"1","1","C");
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Register Number","1","0","C");  
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['RegisterNumber'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Exam","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Exam'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"English","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['English'],"1","0","C");          
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Tamil","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Tamil'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Maths","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Maths'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Science","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Science'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Social","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Social'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Result","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Result'],"1","0","C");          
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Total","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Total'],"1","0","C");
        }        
        
    }
    elseif($rnum == "5A005" && $exam == "Annual")
    {
      $query="select * from viewmark where RegisterNumber='5A005' and Exam='Annual'";
      $res=mysqli_query($conn,$query);
      while($result=  mysqli_fetch_assoc($res))
        {
          ob_start();
          include_once 'fpdf/fpdf.php';
          $pdf=new FPDF('P','mm','A4');
          $pdf->AddPage();
          $pdf->SetFont("Arial","B","17");
          $pdf->setTextcolor(252,3,3);
          $pdf->cell(190,20,"Student's Academic Performance","1","1","C");
          $pdf->SetLeftMargin(30);
          $pdf->setTextColor(0,0,0);
          $pdf->Ln();
          $pdf->cell(150,20,"Examination Mark","1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Name","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Name'],"1","1","C");
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Register Number","1","0","C");  
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['RegisterNumber'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Exam","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Exam'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"English","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['English'],"1","0","C");          
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Tamil","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Tamil'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Maths","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Maths'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Science","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Science'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Social","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Social'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Result","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Result'],"1","0","C");          
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Total","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Total'],"1","0","C");
        }        
        
    }
    elseif($rnum == "5A006" && $exam == "Annual")
    {
      $query="select * from viewmark where RegisterNumber='5A006' and Exam='Annual'";
      $res=mysqli_query($conn,$query);
      while($result=  mysqli_fetch_assoc($res))
        {
          ob_start();
          include_once 'fpdf/fpdf.php';
          $pdf=new FPDF('P','mm','A4');
          $pdf->AddPage();
          $pdf->SetFont("Arial","B","17");
          $pdf->setTextcolor(252,3,3);
          $pdf->cell(190,20,"Student's Academic Performance","1","1","C");
          $pdf->SetLeftMargin(30);
          $pdf->setTextColor(0,0,0);
          $pdf->Ln();
          $pdf->cell(150,20,"Examination Mark","1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Name","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Name'],"1","1","C");
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Register Number","1","0","C");  
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['RegisterNumber'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Exam","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Exam'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"English","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['English'],"1","0","C");          
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Tamil","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Tamil'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Maths","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Maths'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Science","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Science'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Social","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Social'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Result","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Result'],"1","0","C");          
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Total","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Total'],"1","0","C");
        }        
        
    }
    elseif($rnum == "5A007" && $exam == "Annual")
    {
      $query="select * from viewmark where RegisterNumber='5A007' and Exam='Annual'";
      $res=mysqli_query($conn,$query);
      while($result=  mysqli_fetch_assoc($res))
        {
          ob_start();
          include_once 'fpdf/fpdf.php';
          $pdf=new FPDF('P','mm','A4');
          $pdf->AddPage();
          $pdf->SetFont("Arial","B","17");
          $pdf->setTextcolor(252,3,3);
          $pdf->cell(190,20,"Student's Academic Performance","1","1","C");
          $pdf->SetLeftMargin(30);
          $pdf->setTextColor(0,0,0);
          $pdf->Ln();
          $pdf->cell(150,20,"Examination Mark","1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Name","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Name'],"1","1","C");
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Register Number","1","0","C");  
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['RegisterNumber'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Exam","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Exam'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"English","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['English'],"1","0","C");          
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Tamil","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Tamil'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Maths","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Maths'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Science","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Science'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Social","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Social'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Result","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Result'],"1","0","C");          
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Total","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Total'],"1","0","C");
        }        
        
    }
    elseif($rnum == "5A008" && $exam == "Annual")
    {
      $query="select * from viewmark where RegisterNumber='5A008' and Exam='Annual'";
      $res=mysqli_query($conn,$query);
      while($result=  mysqli_fetch_assoc($res))
        {
          ob_start();
          include_once 'fpdf/fpdf.php';
          $pdf=new FPDF('P','mm','A4');
          $pdf->AddPage();
          $pdf->SetFont("Arial","B","17");
          $pdf->setTextcolor(252,3,3);
          $pdf->cell(190,20,"Student's Academic Performance","1","1","C");
          $pdf->SetLeftMargin(30);
          $pdf->setTextColor(0,0,0);
          $pdf->Ln();
          $pdf->cell(150,20,"Examination Mark","1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Name","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Name'],"1","1","C");
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Register Number","1","0","C");  
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['RegisterNumber'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Exam","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Exam'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"English","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['English'],"1","0","C");          
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Tamil","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Tamil'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Maths","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Maths'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Science","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Science'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Social","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Social'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Result","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Result'],"1","0","C");          
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Total","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Total'],"1","0","C");
        }        
        
    }
    elseif($rnum == "5A009" && $exam == "Annual")
    {
      $query="select * from viewmark where RegisterNumber='5A009' and Exam='Annual'";
      $res=mysqli_query($conn,$query);
      while($result=  mysqli_fetch_assoc($res))
        {
          ob_start();
          include_once 'fpdf/fpdf.php';
          $pdf=new FPDF('P','mm','A4');
          $pdf->AddPage();
          $pdf->SetFont("Arial","B","17");
          $pdf->setTextcolor(252,3,3);
          $pdf->cell(190,20,"Student's Academic Performance","1","1","C");
          $pdf->SetLeftMargin(30);
          $pdf->setTextColor(0,0,0);
          $pdf->Ln();
          $pdf->cell(150,20,"Examination Mark","1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Name","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Name'],"1","1","C");
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Register Number","1","0","C");  
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['RegisterNumber'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Exam","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Exam'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"English","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['English'],"1","0","C");          
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Tamil","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Tamil'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Maths","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Maths'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Science","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Science'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Social","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Social'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Result","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Result'],"1","0","C");          
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Total","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Total'],"1","0","C");
        }        
        
    }
    elseif($rnum == "5A010" && $exam == "Annual")
    {
      $query="select * from viewmark where RegisterNumber='5A010' and Exam='Annual'";
      $res=mysqli_query($conn,$query);
      while($result=  mysqli_fetch_assoc($res))
        {
          ob_start();
          include_once 'fpdf/fpdf.php';
          $pdf=new FPDF('P','mm','A4');
          $pdf->AddPage();
          $pdf->SetFont("Arial","B","17");
          $pdf->setTextcolor(252,3,3);
          $pdf->cell(190,20,"Student's Academic Performance","1","1","C");
          $pdf->SetLeftMargin(30);
          $pdf->setTextColor(0,0,0);
          $pdf->Ln();
          $pdf->cell(150,20,"Examination Mark","1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Name","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Name'],"1","1","C");
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Register Number","1","0","C");  
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['RegisterNumber'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Exam","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Exam'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"English","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['English'],"1","0","C");          
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Tamil","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Tamil'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Maths","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Maths'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Science","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Science'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Social","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Social'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Result","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Result'],"1","0","C");          
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Total","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Total'],"1","0","C");
        }        
        
    }
    elseif($rnum == "5A011" && $exam == "Annual")
    {
      $query="select * from viewmark where RegisterNumber='5A011' and Exam='Annual'";
      $res=mysqli_query($conn,$query);
      while($result=  mysqli_fetch_assoc($res))
        {
          ob_start();
          include_once 'fpdf/fpdf.php';
          $pdf=new FPDF('P','mm','A4');
          $pdf->AddPage();
          $pdf->SetFont("Arial","B","17");
          $pdf->setTextcolor(252,3,3);
          $pdf->cell(190,20,"Student's Academic Performance","1","1","C");
          $pdf->SetLeftMargin(30);
          $pdf->setTextColor(0,0,0);
          $pdf->Ln();
          $pdf->cell(150,20,"Examination Mark","1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Name","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Name'],"1","1","C");
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Register Number","1","0","C");  
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['RegisterNumber'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Exam","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Exam'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"English","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['English'],"1","0","C");          
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Tamil","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Tamil'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Maths","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Maths'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Science","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Science'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Social","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Social'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Result","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Result'],"1","0","C");          
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Total","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Total'],"1","0","C");
        }        
        
    }
    elseif($rnum == "5A012" && $exam == "Annual")
    {
      $query="select * from viewmark where RegisterNumber='5A012' and Exam='Annual'";
      $res=mysqli_query($conn,$query);
      while($result=  mysqli_fetch_assoc($res))
        {
          ob_start();
          include_once 'fpdf/fpdf.php';
          $pdf=new FPDF('P','mm','A4');
          $pdf->AddPage();
          $pdf->SetFont("Arial","B","17");
          $pdf->setTextcolor(252,3,3);
          $pdf->cell(190,20,"Student's Academic Performance","1","1","C");
          $pdf->SetLeftMargin(30);
          $pdf->setTextColor(0,0,0);
          $pdf->Ln();
          $pdf->cell(150,20,"Examination Mark","1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Name","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Name'],"1","1","C");
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Register Number","1","0","C");  
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['RegisterNumber'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Exam","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Exam'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"English","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['English'],"1","0","C");          
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Tamil","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Tamil'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Maths","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Maths'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Science","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Science'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Social","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Social'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Result","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Result'],"1","0","C");          
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Total","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Total'],"1","0","C");
        }        
        
    }
    elseif($rnum == "5A013" && $exam == "Annual")
    {
      $query="select * from viewmark where RegisterNumber='5A013' and Exam='Annual'";
      $res=mysqli_query($conn,$query);
      while($result=  mysqli_fetch_assoc($res))
        {
          ob_start();
          include_once 'fpdf/fpdf.php';
          $pdf=new FPDF('P','mm','A4');
          $pdf->AddPage();
          $pdf->SetFont("Arial","B","17");
          $pdf->setTextcolor(252,3,3);
          $pdf->cell(190,20,"Student's Academic Performance","1","1","C");
          $pdf->SetLeftMargin(30);
          $pdf->setTextColor(0,0,0);
          $pdf->Ln();
          $pdf->cell(150,20,"Examination Mark","1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Name","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Name'],"1","1","C");
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Register Number","1","0","C");  
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['RegisterNumber'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Exam","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Exam'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"English","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['English'],"1","0","C");          
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Tamil","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Tamil'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Maths","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Maths'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Science","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Science'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Social","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Social'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Result","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Result'],"1","0","C");          
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"Total","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['Total'],"1","0","C");
        }        
        
    }
    else
    {
         echo "<script type='text/javascript'>alert('Invalid Data  !!');location='download.php';</script>";
    }
    $pdf->Output();
    ob_end_flush();
}

?>