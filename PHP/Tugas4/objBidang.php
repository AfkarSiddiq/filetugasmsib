<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 4 PHP</title>
</head>
<style>
	table {
		border-collapse: collapse;
	}

	table,
	th,
	td {
		border: 1px solid black;
		font-family: 'Courier New', Courier, monospace;
	}
	.judul{
		color: white;
		font-weight: bold;
		font-size: 30px;
		font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
	}

	body{
		background-color: #576CBC;
	}
	p{
		color: white;
    }
    </style>
<body>

    <?php
    // Buatlah Object Bidang,  simpan dengan nama file objBidang.php

    // Buat 6 buah instance object, masing-masing bidang 2 object
    // Tentukan luas bidang berdasarkan object masing-masing bidang
    // Cetak luas bidang masing-masing. Cetak dengan format tabel
    include 'bidang.php';

    $lingkaran1 = new Bidang('lingkaran', 10, 0);
    $lingkaran2 = new Bidang('lingkaran', 20, 0);
    $persegiPanjang1 = new Bidang('persegi panjang', 10, 20);
    $persegiPanjang2 = new Bidang('persegi panjang', 20, 30);
    $segitiga1 = new Bidang('segitiga', 10, 20);
    $segitiga2 = new Bidang('segitiga', 20, 30);

    $luasLingkaran1 = $lingkaran1->luas();
    $luasLingkaran2 = $lingkaran2->luas();
    $luasPersegiPanjang1 = $persegiPanjang1->luas();
    $luasPersegiPanjang2 = $persegiPanjang2->luas();
    $luasSegitiga1 = $segitiga1->luas();
    $luasSegitiga2 = $segitiga2->luas();


    ?>
    <center>
        <table align="center" cellpadding="10" cellpadding="0">
            <thead>
                <tr colspan="2" align="center" bgcolor="#867070" class="judul">
                    <td>BIDANG</td>
                    <td>Nilai1</td>
                    <td>Nilai2</td>
                    <td>LUAS</td>
                </tr>
            </thead>
            <tr bgcolor="#D5B4B4" align="center">
                <td>Lingkaran 1</td>
                <td><?= $lingkaran1->nilai1 ?></td>
                <td>-</td>
                <td><?= $luasLingkaran1 ?></td>
            </tr>
            <tr bgcolor="#E4D0D0" align="center">
                <td>lingkaran 2</td>
                <td><?= $lingkaran2->nilai1 ?></td>
                <td>-</td>
                <td><?= $luasLingkaran2 ?></td>
            </tr>
            <tr bgcolor="#D5B4B4" align="center">
                <td>Persegi Panjang 1</td>
                <td><?= $persegiPanjang1->nilai1 ?></td>
                <td><?= $persegiPanjang1->nilai2 ?></td>
                <td><?= $luasPersegiPanjang1 ?></td>
            </tr>
            <tr bgcolor="#E4D0D0" align="center">
                <td>Persegi Panjang 2</td>
                <td><?= $persegiPanjang2->nilai1 ?></td>
                <td><?= $persegiPanjang2->nilai2 ?></td>
                <td><?= $luasPersegiPanjang2 ?></td>
            </tr>
            <tr bgcolor="#D5B4B4" align="center">
                <td>Segitiga 1</td>
                <td><?= $segitiga1->nilai1 ?></td>
                <td><?= $segitiga1->nilai2 ?></td>
                <td><?= $luasSegitiga1 ?></td>
            </tr>
            <tr bgcolor="#E4D0D0" align="center">
                <td>Segitiga 2</td>
                <td><?= $segitiga2->nilai1 ?></td>
                <td><?= $segitiga2->nilai2 ?></td>
                <td><?= $luasSegitiga2 ?></td>
            </tr>
        </table>
        <p align="center">&copy; M. Afkar Siddiq 2023</p>
    </center>
</body>

</html>