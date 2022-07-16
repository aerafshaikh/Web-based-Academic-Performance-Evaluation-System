<?php
require_once 'FPDF/fpdf.php';
require_once 'connection.php';
$db=mysqli_connect('localhost','root','','apes');
$seat_no='seat_no';
$sql2="SELECT * FROM `fy_stud_data`";
$run2=mysqli_query($db,$sql2);

    if(isset($_POST['btn_pdf']))
    {
        $pdf=new FPDF('p','mm','a4');
        $pdf->SetFont('arial','b','14');
        $pdf->AddPage();
        $pdf->cell('40','10','Post ID','1','0','C');
        $pdf->cell('40','10','Post ID','1','0','C');
        $pdf->cell('40','10','Post ID','1','0','C');
        $pdf->cell('40','10','Post ID','1','0','C');
        $pdf->cell('40','10','Post ID','1','0','C');

        while($row=mysqli_fetch_assoc($run2))
        {
            $pdf->cell('25','10','Post ID','1','0','C');
        }
        $pdf->Output();
    }
?>