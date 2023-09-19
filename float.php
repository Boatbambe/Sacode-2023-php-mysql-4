<?php 
// tipe data float adalah bilangan pecahan
$x = 10.6;
$y = 77.7;

$tambah = $x + $y;

// didalam tipe data float kita bisa melalukan perhitungan aritmatika

var_dump ($x);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipe Data Float</title>
</head>
<body>
    <p>Tipe data Float (bilangan pecahan)</p>
    <p><?= $x?></p>
    <p><?= $y?></p>
    <p><?= $x?> + <?= $y ?> = <?= $tambah ?></p>
</body>
</html>