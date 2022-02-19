<?php
    session_start();
    require "dbconfig/config.php";
    require "FPDF/fpdf.php";
    //mysqli_select_db($con,'sps');
    //$db= new PDO('mysql:host=localhost; dbname=sps','root','');

    class myPDF extends FPDF{
        function header(){
            $this->Image('./IMG/ULLogo.png',20,10,-200);
            $this->Image('./IMG/security.png',100,0, 100);
            $this->ln(23);
            $this->SetFont('Times','B',30);
            $this->cell(276,10,'PassOut',20,0,'C');
//            $this->SetFont('Arial','B',14);
//            $this->cell(276,5, 'Property Details',0,0,'C');
            $this->ln();
            $this->SetFont('Times','B',20);
            $this->cell(276,10,'Owner & Propertey Details',0,0,'C');
            $this->ln(20);
        }
        function footer(){
            $this->SetY(-15);
            $this->SetFont('Arial','',8);
            $this->cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
            
        }
        
        function OwnerDetail(){
            $this->SetFont('Times','B',12);
            $this->cell(276,5, 'Owner Details',0,0,'C');
            $this->ln();
            $this->Cell(60,10,'First Name(s)',1,0,'C');
            $this->Cell(50,10,'Surname',1,0,'C');
            $this->Cell(40,10,'Student No.',1,0,'C');
            $this->Cell(30,10,'Gender.',1,0,'C');
            $this->Cell(70,10,'E-Mail',1,0,'C');
            $this->Cell(30,10,'Cellphone No.',1,0,'C');
            $this->ln();
        }
       
        function viewOwner($con){
            $this->SetFont('Times','',12);
            $session = $_SESSION['username'] ;
                $query= mysqli_query($con,"SELECT * FROM userinfotable  WHERE username = '$session' ");
                
				while($user= mysqli_fetch_array($query)){
                    $this->cell(60,10,$user['FName'],1,0,'C');
                    $this->cell(50,10,$user['Lname'],1,0,'L');
                    $this->cell(40,10,$user['stNo'],1,0,'L');
                    $this->cell(30,10,$user['Gender'],1,0,'L');
                    $this->cell(70,10,$user['Email'],1,0,'L');
                    $this->cell(30,10,$user['cell'],1,0,'L');
                    $this->ln(20);
                }
        }
         function OwnerAddress(){
            $this->SetFont('Times','B',12);
            $this->cell(276,5, 'Owner Address',0,0,'C');
            $this->ln();
            
        }
        function viewOwnerAddress($con){
            $this->SetFont('Times','',12);
            $session = $_SESSION['username'] ;
                $query= mysqli_query($con,"SELECT * FROM userinfotable  WHERE username = '$session' ");
            
            while($user= mysqli_fetch_array($query)){
                    $this->cell(276,10,$user['Address'],1,0,'C');
                    $this->ln(20);
            }
            
        }
        
        function HeaderTable(){
            $this->SetFont('Times','B',12);
            $this->cell(276,5, 'Properties Owned',0,0,'C');
            $this->ln();
            $this->cell(60,10,'Name',1,0,'C');
            $this->cell(50,10,'Brand',1,0,'C');
            $this->cell(40,10,'Model',1,0,'C');
            $this->cell(70,10,'Serial No.',1,0,'C');
            $this->cell(30,10,'Color',1,0,'C');
            $this->cell(30,10,'Type',1,0,'C');
            $this->ln();
            
        }
        function viewTable($con){
            $this->SetFont('Times','',12);
            $session = $_SESSION['username'] ;
                $query1= mysqli_query($con,"SELECT * FROM userinfotable  WHERE username = '$session' ");
                $row=mysqli_fetch_array($query1);
                $stNo=$row['stNo'];
                $query= mysqli_query($con,"SELECT * FROM producttable  WHERE stNo = '$stNo' ");
				while($user= mysqli_fetch_array($query)){
                    $this->cell(60,10,$user['PName'],1,0,'C');
                    $this->cell(50,10,$user['PBrand'],1,0,'L');
                    $this->cell(40,10,$user['PModel'],1,0,'L');
                    $this->cell(70,10,$user['PSerial'],1,0,'L');
                    $this->cell(30,10,$user['PColor'],1,0,'L');
                    $this->cell(30,10,$user['PType'],1,0,'L');
                    $this->ln();
                }
            
            
                    
                    
                }
            
        
    }

$pdf = new myPDF();
$pdf->AliasNbPages();
$pdf->AddPage('L','A4', 0);
$pdf->OwnerDetail();
$pdf->viewOwner($con);
$pdf->OwnerAddress();
$pdf->viewOwnerAddress($con);
$pdf->headerTable();
$pdf->viewTable($con);
$pdf->Output();
    
?>