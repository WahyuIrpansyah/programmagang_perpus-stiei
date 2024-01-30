<?php
$pdf = new FPDF("L", "cm", "A4"); // Mengganti "P" menjadi "L" untuk landscape
$pdf->AddPage();
$pdf->SetTitle("Laporan Data Member");

$pdf->Image('./lib/img/logo.png', 2, 1, 2);
// Header
$pdf->SetFont("Arial", "B", 16);
$pdf->Cell(0, 1, "STIE INDONESIA BANJARMASIN", 0, 1, "C");
$pdf->SetFont("Arial", "", 11);
$pdf->Cell(0, 1, "Alamat: Jl. Brig Jend. Hasan Basri No.9 - 11, Pangeran, Kec. Banjarmasin Utara", 0, 1, "C");
$pdf->Cell(0, 1, "Kota Banjarmasin, Kalimantan Selatan 70124", 0, 1, "C");
$pdf->Line(1, 4, $pdf->GetPageWidth() - 1, 4); // Mengganti panjang garis sesuai dengan mode landscape
$pdf->Ln();

// Judul Laporan
$pdf->SetFont("Arial", "B", 12);
$pdf->Cell(0, 1, "Laporan Data Member", 0, 1, "C");
$pdf->Ln();

// Header Tabel
$pdf->SetFont("Arial", "B", 11);
$pdf->SetFillColor(0, 255, 0);
$pdf->Cell(1, 1, "Nama", 1, 0, "C", true);
$pdf->Cell(6, 1, "Tempat / Tanggal Lahir", 1, 0, "C", true);
$pdf->Cell(4, 1, "Npm", 1, 0, "C", true);
$pdf->Cell(4, 1, "Semester", 1, 0, "C", true);
$pdf->Cell(4, 1, "Jurusan", 1, 0, "C", true);
$pdf->Cell(1, 1, "Email", 1, 0, "C", true);
$pdf->Cell(6, 1, "Agama", 1, 0, "C", true);
$pdf->Cell(4, 1, "Alamat", 1, 0, "C", true);
$pdf->Cell(4, 1, "No Telepon", 1, 0, "C", true);
$pdf->Cell(4, 1, "Foto", 1, 1, "C", true);

// Isi Tabel
$pdf->SetFont("Arial", "", 11);
foreach ($member_baru as $a) {
    $pdf->Cell(1, 1, $a->nama, 1, 0, "C");
    $pdf->Cell(6, 1, $a->tempattanggal_lahir, 1, 0, "C");
    $pdf->Cell(4, 1, $a->npm, 1, 0, "C");
    $pdf->Cell(4, 1, $a->semester, 1, 0, "C");
    $pdf->Cell(4, 1, $a->jurusan, 1, 1, "C");
    $pdf->Cell(1, 1, $a->email, 1, 0, "C");
    $pdf->Cell(6, 1, $a->agama, 1, 0, "C");
    $pdf->Cell(4, 1, $a->alamat, 1, 0, "C");
    $pdf->Cell(4, 1, $a->no_telp, 1, 0, "C");
    $pdf->Cell(4, 1, $a->foto, 1, 1, "C");
}

// Output
$pdf->Output("I", "Laporan Data Member.pdf");
