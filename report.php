<?php

include 'koneksi.php';
require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet    = new Spreadsheet();
$sheet          = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A1','No');
$sheet->setCellValue('B1','Nama');
$sheet->setCellValue('C1','Program Studi');
$sheet->setCellValue('D1','Email');
$sheet->setCellValue('E1','Alamat');
$sheet->setCellValue('F1','NIK');
$sheet->setCellValue('G1','Jenis Kelamin');
$sheet->setCellValue('H1','NPM');


$sql = mysqli_query($koneksi,"SELECT * FROM akun");
$i  = 2;
$no = 1;
while ($row = mysqli_fetch_array($sql)) {
    $sheet->setCellValue('A'.$i,$no++);
    $sheet->setCellValue('B'.$i,$row['nama']);
    $sheet->setCellValue('C'.$i,$row['prodi']);
    $sheet->setCellValue('D'.$i,$row['email']);
        $sheet->setCellValue('E'.$i,$row['alamat']);
            $sheet->setCellValue('F'.$i,$row['nik']);
                $sheet->setCellValue('G'.$i,$row['jeniskelamin']);
                    $sheet->setCellValue('H'.$i,$row['npm']);
    $i++;
}

$styleArray = [
    'borders'=>[
        'allBorders'=>[
            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
        ],
    ],
];
$i = $i - 1;
$sheet->getStyle('A1:H'.$i)->applyFromArray($styleArray);

$writer         = new Xlsx($spreadsheet);
$writer->save('Report Data Siswa Baru.Xlsx');
if ($writer) {
            ?>
        <script language="javascript">
            alert('Excel Berhasil Dibuat');
            document.location.href="index.php";
        </script>
        <?php
} 
?>