<?php
$pdf = new FPDF("L", "cm", "A4"); // Mengganti "P" menjadi "L" untuk landscape
$pdf->AddPage();
$pdf->SetTitle("Laporan Data Pembayaran");
$pdf->SetFont("Arial", "B", 16);
$pdf->Cell(19, 1, "STIE INDONESIA BANJARMASIN", 0, 1, "C");
$pdf->SetFont("Arial", "", 11);
$pdf->Cell(19, 1, "Alamat: Jl. Brig Jend. Hasan Basri No.9 - 11, Pangeran, Kec. Banjarmasin Utara, 
Kota Banjarmasin, Kalimantan Selatan 70124", 0, 1, "C");
$pdf->Line(1, 3, 28, 3); // Mengganti panjang garis sesuai dengan mode landscape
$pdf->Ln();
$pdf->SetFont("Arial", "B", 12);
$pdf->Cell(19, 1, "Laporan Data Pembayaran", 0, 1, "C");
$pdf->Ln();
$pdf->SetFont("Arial", "B", 11);
$pdf->SetFillColor(0, 255, 0);
$pdf->Cell(4, 1, "Tanggal", 1, 0, "C", true);
$pdf->Cell(6, 1, "Npm", 1, 0, "C", true);
$pdf->Cell(4, 1, "Nama", 1, 0, "C", true);
$pdf->Cell(4, 1, "Jurusan", 1, 1, "C", true);
$pdf->Cell(4, 1, "Semester", 1, 0, "C", true);
$pdf->Cell(4, 1, "Status", 1, 1, "C", true);
$pdf->Cell(4, 1, "Tujuan", 1, 0, "C", true);
$pdf->Cell(4, 1, "Total Pembayaran", 1, 1, "C", true);
$pdf->SetFont("Arial", "", 11);
$no = 1;
foreach ($pembayaran as $a) {
    $pdf->Cell(4, 1, $a->tanggal, 1, 0, "C");
    $pdf->Cell(6, 1, $a->npm, 1, 0, "C");
    $pdf->Cell(4, 1, $a->nama, 1, 0, "C");
    $pdf->Cell(4, 1, $a->jurusan, 1, 1, "C"); // Perubahan di sini
    $pdf->Cell(4, 1, $a->semester, 1, 0, "C");
    $pdf->Cell(4, 1, $a->status, 1, 1, "C");
    $pdf->Cell(4, 1, $a->tujuan, 1, 0, "C");
    $pdf->Cell(4, 1, $a->total_pembayaran, 1, 1, "C");
}
$pdf->Output("I", "Laporan Data Pembayaran.pdf");
