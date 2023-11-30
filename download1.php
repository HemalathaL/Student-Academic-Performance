<?php
$conn=mysqli_connect('localhost','root','','college');
if($conn)
{
    $rnum=$_POST['reg1'];
      $query="select * from viewmark where RegisterNumber='$rnum'";
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
          $pdf->cell(150,20,"Semester Mark","1","0","C");
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
          $pdf->cell(75,20,"PythonLab","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['PythonLab'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"PythonTheory","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['PythonTheory'],"1","0","C");          
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"CoLab","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['CoLab'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"COTheory","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['COTheory'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"JavaLab","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['JavaLab'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"JavaTheory","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['JavaTheory'],"1","0","C");
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"WebLab","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['WebLab'],"1","0","C");          
          $pdf->Ln();
          $pdf->SetFont("Arial","B","17");
          $pdf->cell(75,20,"WebTheory","1","0","C");
          $pdf->SetFont("Arial","","17");
          $pdf->cell(75,20,$result['WebTheory'],"1","0","C");
        }
    }
   
    else
    {
         echo "<script type='text/javascript'>alert('Invalid Data  !!');location='download.php';</script>";
    }
    $pdf->Output();
    ob_end_flush();


?>