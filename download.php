<?php
require('fpdf/fpdf.php');
include('db_con.php');

$form_number = isset($_GET['form']) ? $_GET['form'] : '';

$stmt = $con->prepare("SELECT * FROM registration_form WHERE form_number = ?");
$stmt->bind_param("s", $form_number);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows !== 1) {
    die("No data found.");
}

$data = $result->fetch_assoc();

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetAutoPageBreak(true, 20);
$pdf->SetFillColor(245, 245, 245);
$pdf->SetDrawColor(100, 100, 100);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetLineWidth(0.2);

$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(0, 15, 'Student Registration Details', 0, 1, 'C');
$pdf->Ln(25);

// Function to create a row with padding and aligned text
function cell_row($pdf, $label, $value, $fill = false) {
    $totalWidth = 180;
    $startX = (210 - $totalWidth) / 2;
    $pdf->SetX($startX);
    
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(50, 10, "  " . $label, 1, 0, 'L', $fill); // padded left label

    // Add inner left padding of ~5mm to right cell content
    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(130, 10, "     " . $value, 1, 1, 'L', $fill); 
}

// Profile Photo Section - Centered
$fill = false;
$totalWidth = 180;
$startX = (210 - $totalWidth) / 2;
$pdf->SetX($startX);
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(50, 40, "  Profile Photo", 1, 0, 'L', $fill);

$x = $pdf->GetX(); // x of right cell
$y = $pdf->GetY(); // y of row
$pdf->Cell(130, 40, '', 1, 0, 'C', $fill); 
$pdf->Ln(40);

// Show image inside right cell
if (!empty($data['image_path']) && file_exists($data['image_path'])) {
    $img_w = 30;
    $img_h = 30;
    $img_x = $x + (130 / 2) - ($img_w / 2); // center image inside 130mm
    $img_y = $y + (40 / 2) - ($img_h / 2);
    $pdf->Image($data['image_path'], $img_x, $img_y, $img_w, $img_h);
    $pdf->Rect($img_x, $img_y, $img_w, $img_h);
} else {
    $pdf->SetXY($x, $y + 15);
    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(130, 10, 'No photo available', 0, 0, 'C');
    $pdf->Ln(10);
}

// Registration Rows - With alternating fill
$fill = false;
cell_row($pdf, 'Form Number', $data['form_number'], $fill); $fill = !$fill;
cell_row($pdf, 'Full Name', $data['first_name'], $fill); $fill = !$fill;
cell_row($pdf, 'Phone', $data['phone'], $fill); $fill = !$fill;
cell_row($pdf, 'Email', $data['email'], $fill); $fill = !$fill;
cell_row($pdf, 'DOB', $data['dob'], $fill); $fill = !$fill;
cell_row($pdf, 'Gender', $data['gender'], $fill); $fill = !$fill;
cell_row($pdf, 'Aadhaar', $data['aadhaar'], $fill); $fill = !$fill;
cell_row($pdf, 'Program', $data['program_type'], $fill); $fill = !$fill;
cell_row($pdf, 'Address', $data['address'], $fill);

// Footer
$pdf->Ln(10);
$pdf->SetFont('Arial', 'I', 10);
$pdf->Cell(0, 10, 'Generated on: ' . date('d-m-Y'), 0, 0, 'R');

// Output PDF
$pdf->Output('D', "Registration_{$data['first_name']}.pdf");
?>
