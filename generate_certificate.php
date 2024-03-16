<?php
require('fpdf/fpdf.php');

class PDF extends FPDF
{
    function Header()
    {
        // Add your header content here (if any)
    }

    function Footer()
    {
        // Add your footer content here (if any)
    }

    function generateCertificate($fullName, $parentName, $dob, $placeOfBirth)
    {
        // Add your certificate content here
        $this->AddPage();

        $this->SetFont('Arial', 'B', 16);
        $this->Cell(0, 10, 'Birth Certificate', 0, 1, 'C');

        $this->Ln(10);

        $this->SetFont('Arial', '', 12);
        $this->MultiCell(0, 10, "This is to certify that $fullName, son/daughter of $parentName, was born on $dob in $placeOfBirth.");

        $this->Output('D', 'Birth_Certificate.pdf');
    }
}

// Get data from the form or database (replace with your logic)
$fullName = "John Doe";
$parentName = "Jane Doe";
$dob = "January 1, 2000";
$placeOfBirth = "City, Country";

$pdf = new PDF();
$pdf->generateCertificate($fullName, $parentName, $dob, $placeOfBirth);
?>
