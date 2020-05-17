<?php
//============================================================+
// File name   : example_023.php //page break
// File name   : example_028.php //a4 landscape
// File name   : example_048.php //html table
//============================================================+

require_once('../classes/tcpdf/config/lang/eng.php');
require_once('../classes/tcpdf/tcpdf.php');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Pemerintah Kota Bandung');
$pdf->SetTitle('Formulir RKA SKPD');
$pdf->SetSubject('RKA SKPD');
$pdf->SetKeywords('Pemerintah Kota Bandung, RKA, SKPD');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.'', PDF_HEADER_STRING); //'' -> empty title on header

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));


// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

//set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

//set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

//set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

//set some language-dependent strings
$pdf->setLanguageArray($l);

// ---------------------------------------------------------

// set font
$pdf->SetFont('helvetica', 'B', 20);

// add a page
$pdf->AddPage('L', 'A4');

$pdf->SetFont('helvetica', '', 10);


// -----------------------------------------------------------------------------

// NON-BREAKING TABLE (nobr="true")

//$kegiatan_id   = $_GET["id"];

ob_start();
include("view_lsm_pdf.php");

$inc = ob_get_contents();

ob_end_clean();

$tbl = <<<EOD
$inc
EOD;

$pdf->writeHTML($tbl, true, false, false, false, ''); 

// -----------------------------------------------------------------------------

//Close and output PDF document
$pdf->Output('suratmasuk_'.time().'.pdf', 'I');

//============================================================+
// END OF FILE                                                
//============================================================+
