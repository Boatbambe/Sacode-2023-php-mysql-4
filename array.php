<?php 
// Cara lama penulisan Array
$a = array ('Jayapura','Bandung', 'Wamena', 'Biak');

// Cara baru penulisan Array
$b = ['Jayapura','Bandung', 'Wamena', 'Biak'];

// var_dump ($a)
// cara panggil array
echo ($b [2]);

// echo "<br>";

// foreach($b as $y) 
// {
//     echo $y .'<br>';
// }
// Array Assosiatif
// $c = [
//     "Billy" => "Biak",
//     "Calvin" => "Wamena",
//     "Samuel" => "Sorong"
// ];

// var_dump($c)

// echo '<br>';
// echo $c ['billy'] ."<br>";


$no = 0;
$data_kendaraan = [
    [
        "nama_kendaraan" => "motor metik",
        "tahun_beli"     => "2022",
        "harga"          => "20.000.000"
    ],
    [
        "nama_kendaraan" => "mobil avanza",
        "tahun_beli"     => "2008",
        "harga"          => "80.000.000"
    ],
    [
        "nama_kendaraan" => "truck",
        "tahun_beli"     => "2018",
        "harga"          => "200.000.000"
    ],
    [
        "nama_kendaraan" => "Pesawat",
        "tahun_beli"     => "2020",
        "harga"          => "1.000.000.000"
    ]
]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ddd</title>
</head>
<body>
    <table>
        <tr>
            <th>No</th>
            <th>Nama Kendaraan</th>
            <th>Tahun Beli</th>
            <th>Harga</th>
        </tr>
        <?php foreach ($data_kendaraan as $dk):?>
            <tr>
                <td> <?= ++$no ?> .</td>
                <td> <?= $dk ['nama_kendaraan'] ?></td>
                <td> <?= $dk ['tahun_beli'] ?></td>
                <td> <?= $dk ['harga'] ?></td>
            </tr>
        <?php endforeach ?>
    </table>
</body>
</html>