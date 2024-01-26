<?php
$pdf = new FPDF("L", "cm", "A4"); // Mengganti "P" menjadi "L" untuk landscape
$pdf->AddPage();
$pdf->SetTitle("Laporan Data Denda");
$pdf->SetFont("Arial", "B", 16);
$pdf->Cell(19, 1, "STIE INDONESIA BANJARMASIN", 0, 1, "C");
$pdf->SetFont("Arial", "", 11);
$pdf->Cell(19, 1, "Alamat: Jl. Brig Jend. Hasan Basri No.9 - 11, Pangeran, Kec. Banjarmasin Utara, 
Kota Banjarmasin, Kalimantan Selatan 70124", 0, 1, "C");
$pdf->Line(1, 3, 28, 3); // Mengganti panjang garis sesuai dengan mode landscape
$pdf->Ln();
$pdf->SetFont("Arial", "B", 12);
$pdf->Cell(19, 1, "Laporan Data Denda", 0, 1, "C");
$pdf->Ln();
$pdf->SetFont("Arial", "B", 11);
$pdf->SetFillColor(0, 255, 0);
$pdf->Cell(4, 1, "Bulan", 1, 0, "C", true);
$pdf->Cell(6, 1, "Minggu", 1, 0, "C", true);
$pdf->Cell(4, 1, "Jumlah Denda", 1, 0, "C", true);
$pdf->Cell(4, 1, "Total Denda", 1, 1, "C", true); // Perubahan di sini
$pdf->SetFont("Arial", "", 11);
$no = 1;
foreach ($denda as $a) {
    $pdf->Cell(4, 1, $a->bulan, 1, 0, "C");
    $pdf->Cell(6, 1, $a->minggu, 1, 0, "C");
    $pdf->Cell(4, 1, $a->jumlah_denda, 1, 0, "C");
    $pdf->Cell(4, 1, $a->total_denda, 1, 1, "C"); // Perubahan di sini
}
$pdf->Output("I", "Laporan Data Denda.pdf");
