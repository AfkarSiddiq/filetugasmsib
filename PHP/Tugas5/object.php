<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
		background-color: #576CBC;
	}
</style>
<body>
    <center>
        <table cellpadding="10" cellspacing="0">
            <thead>
                <?php
                include 'segitiga.php';
                include 'lingkaran.php';
                include 'persegiPanjang.php';
                $scalarArray = ["No", "Nama Bidang", "Keterangan", "Luas Bidang", "Keliling Bidang"];

                foreach ($scalarArray as $value) {
                    echo "<th bgcolor='#609966'>$value</th>";
                }
                ?>
            </thead>
            <tbody>
                <?php
                $lingkaran1 = new Lingkaran(10);
                $persegiPanjang = new persegiPanjang(10, 20);
                $segitiga = new Segitiga(10, 20, 30);
                $dataBidang = [$lingkaran1, $persegiPanjang, $segitiga];
                $i = 1;
                foreach ($dataBidang as $data) {
                    $warna = $i % 2 == 0 ?   "#9DC08B" : "#D7E9B9";
                ?>
                    <tr bgcolor=<?= $warna ?>>
                        <td><?= $i++ ?></td>
                        <td><?= $data->namaBidang() ?></td>
                        <td><?= $data->keterangan() ?></td>
                        <td><?= $data->luasBidang() ?></td>
                        <td><?= $data->kelilingBidang() ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <p align="center" style="color: #fff;">&copy; M. Afkar Siddiq 2023</p>
    </center>
</body>

</html>