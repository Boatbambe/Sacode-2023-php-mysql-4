<?php 
$angka_satu =  50;
$angka_dua = 10;
$angkat_tiga = 77;

var_dump ($angka_satu);
var_dump ($angka_dua);
var_dump ($angka_tiga);

// Penambahan
$tambah = $angka_satu + $angka_dua + $angka_tiga;
// pengurangan;
$kurang = $angka_satu - $angka_dua;
// perkalian
$kali = $angka_satu * $angka_dua;
// Pembagian
$bagi = $angka_satu / $angka_dua;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipe Data Intiger</title>
</head>
<body>
    <p>Penambahan</p>
    <p> <?= $tambah ?></p>


    <P>pengurangan</P>
    <p> <?= $kurang?></p>


    <P>Perkalian</P>
    <p> <?= $kali?></p>
    
    <P>Pembagian</P>
    <p> <?= $bagi?></p>



    
</body>
</html>