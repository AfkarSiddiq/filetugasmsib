<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <style>
        body {
        background-image: url("https://images.pexels.com/photos/787320/pexels-photo-787320.jpeg?cs=srgb&dl=pexels-787320.jpg&fm=jpg");
        background-repeat: no-repeat;
        background-size: cover;
        font-family: 'Righteous', cursive;
        }
        p{
            font-family: 'Montserrat', sans-serif;
        }

    </style>
    <!-- Buatlah form input nilai dengan element sebagai berikut:

- method form: POST

- input nama, name => nama

- seleksi mata pelajaran, name => matpel

  IPA, IPS, Matematika, Fisika

- input nilai, name => nilai

- tombol simpan, name => simpan

Tugas:

1. Buat Form

2. Tampilkan Populasi Data di atas dengan format tabel, jika tombol simpan sudah di klik

3. Populasi data tambahan:

   - Kelulusan nilai minimal 60 (ternary) 

   - Grade A,B,C,D,E (if multi kondisi)

       A => 86 s/d 100, B => 76 s/d < 86, C => 60 s/d < 76, D => 31 s/d < 60, E sisanya

   - Predikat dari grade (Switch Case)

       A => Memuaskan, B => Bagus, C => Cukup,  D => Kurang, E => Buruk -->

<center>
    <table border="1" style="color:aliceblue;">
        <form action="tugas2.php" method="post">
            <thead align="center" bgcolor="blue">
                <td colspan='2'>Masukkan nama mahasiswa</td>
            </thead>
            <tr>
                <td><label for="nama">Nama</label></td>
                <td><input type="text" name="nama" id="nama"></td>
            </tr>
            <tr>
                <td><label for="matpel">Mata Pelajaran</label></td>
                <td><select name="matpel" id="matpel">
                        <option value="IPA">IPA</option>
                        <option value="IPS">IPS</option>
                        <option value="Matematika">Matematika</option>
                        <option value="Fisika">Fisika</option>
                    </select></td>
            </tr>
            <tr>
                <td> <label for="nilai">Nilai</label></td>
                <td> <input type="number" name="nilai" id="nilai"></td>
            </tr>
            <tr cellspacing="4"></tr>
            <tr align="center">
                <td colspan="2"><input type="submit" name="simpan" value="Simpan"></td>
            </tr>
    </table>
    
    </form>
    <br>
    <table>

    </table>

    <?php
    $grade = "";
    if (isset($_POST['simpan']) == 'a') {
        $nama = $_POST['nama'];
        $matpel = $_POST['matpel'];
        $nilai = $_POST['nilai'];
        $kelulusan = ($nilai >= 60) ? "Lulus" : "Tidak Lulus";
    } else if (isset($_POST['simpan']) == 'b') {
        $nama = $_POST['nama'];
        $matpel = $_POST['matpel'];
        $nilai = $_POST['nilai'];
        $kelulusan = ($nilai >= 60) ? "Lulus" : "Tidak Lulus";
    } else if (isset($_POST['simpan']) == 'c') {
        $nama = $_POST['nama'];
        $matpel = $_POST['matpel'];
        $nilai = $_POST['nilai'];
        $kelulusan = ($nilai >= 60) ? "Lulus" : "Tidak Lulus";
    } else if (isset($_POST['simpan']) == 'd') {
        $nama = $_POST['nama'];
        $matpel = $_POST['matpel'];
        $nilai = $_POST['nilai'];
        $kelulusan = ($nilai >= 60) ? "Lulus" : "Tidak Lulus";
    } else if (isset($_POST['simpan']) == 'e') {
        $nama = $_POST['nama'];
        $matpel = $_POST['matpel'];
        $nilai = $_POST['nilai'];
        $kelulusan = ($nilai >= 60) ? "Lulus" : "Tidak Lulus";
    }

    switch ($nilai) {
        case $nilai >= 86 && $nilai <= 100:
            $grade = "A";
            $predikat = "Memuaskan";
            break;
        case $nilai >= 76 && $nilai < 86:
            $grade = "B";
            $predikat = "Bagus";
            break;
        case $nilai >= 60 && $nilai < 76:
            $grade = "C";
            $predikat = "Cukup";
            break;
        case $nilai >= 31 && $nilai < 60:
            $grade = "D";
            $predikat = "Kurang";
            break;
        default:
            $grade = "E";
            $predikat = "Buruk";
            break;
    }
    ?>
    <table id="hasil" cellpadding="7">
        <tr align="center" bgcolor="black" style="color: white;">
            <th>Nama</th>
            <th>Mata Pelajaran</th>
            <th>Nilai</th>
            <th>Kelulusan</th>
            <th>Grade</th>
            <th>Predikat</th>
        </tr>
        <tr align="center" bgcolor="green" style="color: white;">
            <td><?php echo $nama; ?></td>
            <td><?php echo $matpel; ?></td>
            <td><?php echo $nilai; ?></td>
            <td><?php echo $kelulusan; ?></td>
            <td><?php echo $grade; ?></td>
            <td><?php echo $predikat; ?></td>
        </tr>
    </table>
    <p align="center" style="color:aliceblue;">&copy;M. Afkar Siddiq 2023</p>
    </center>
</body>

</html>