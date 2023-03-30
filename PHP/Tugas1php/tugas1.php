<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1 PHP</title>
</head>
<style>
    body {
        background-image: url("https://images.pexels.com/photos/787320/pexels-photo-787320.jpeg?cs=srgb&dl=pexels-787320.jpg&fm=jpg");
        background-repeat: no-repeat;
        background-size: cover;
        }

    table {
        width: 50%;
        margin: 200px auto 0px auto;
        /* padding: 100px; */
        background-color: white;
        color: pink;
    }

    .header{
        text-align: center;
        font-weight: bold;
        background-color: #262A56;
        color: white;
        font-family: 'Righteous', cursive;
    }
    tr {
        background-color: black;
        color: white;
        font-family: 'Righteous', cursive;
    }
    p{
        font-family: 'Montserrat', sans-serif;
        }
</style>

<body>
    <?php
    $pelanggan = "Siti Aminah";
    $produk = "TV";
    $jumlah_beli = 3;
    $harga_satuan = 0;
    $harga_kotor = 0;
    $diskon = 0;
    $ppn = 0;
    $harga_bayar = 0;

    switch ($produk) {
        case 'TV':
            $harga_satuan = 3000000;
            break;
        case 'Kulkas':
            $harga_satuan = 4000000;
            break;
        case 'Mesin Cuci':
            $harga_satuan = 5000000;
            break;
        default:
            $harga_satuan = 0;
            break;
    }

    $harga_kotor = $harga_satuan * $jumlah_beli;

    $diskon = ($produk == "TV" && $jumlah_beli > 2) ? 0.25 * $harga_kotor : 0.1 * $harga_kotor;

    $ppn = 0.11 * ($harga_kotor - $diskon);

    $harga_bayar = ($harga_kotor - $diskon) + $ppn;


    ?>
    <table align="center" cellpadding="7">
        <th colspan='8' bgcolor="black" style="color: white;">Table pelanggan</th>

        <tr class='header'>
            <td>Nama Pelanggan</td>
            <td>Nama Produk</td>
            <td>Jumlah Beli</td>
            <td>Harga Satuan</td>
            <td>Harga Kotor</td>
            <td>Diskon</td>
            <td>PPN</td>
            <td>Harga Bayar</td>
        </tr>
        <tr align="center" bgcolor="black" style="color: pink;">
            <td><?php echo $pelanggan ?></td>
            <td><?php echo $produk ?></td>
            <td><?php echo $jumlah_beli ?></td>
            <td><?php echo $harga_satuan ?></td>
            <td><?php echo $harga_kotor ?></td>
            <td><?php echo $diskon ?></td>
            <td><?php echo $ppn ?></td>
            <td><?php echo $harga_bayar ?></td>
        </tr>

    </table>
    <p align="center" style="color:aliceblue;">&copy;M. Afkar Siddiq 2023</p>
</body>

</html>