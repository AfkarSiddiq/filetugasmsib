<!DOCTYPE html>

<html>

<head>

	<title>Daftar Nilai Mahasiswa</title>

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
	.bold{
		font-size: 20px;
		font-weight: bold;
	}
	body{
		background-color: #576CBC;
	}
	p{
		color: white;}
</style>
<body>

<br><br><br>
	<table align="center" cellpadding="10" cellpadding="0">
		<thead>
			<tr>
				<th colspan="7" bgcolor="black" class='judul'>
					Daftar Mahasiswa
				</th>
			</tr>
			<tr>
				<?php
				//looping array judul kolom: no, nim, nama, nilai, keterangan, grade, predikat
				$ar_judul = ['No', 'NIM', 'Nama', 'Nilai', 'Keterangan', 'Grade', 'Predikat'];
				foreach ($ar_judul as $jdl) {

				?>
					<th bgcolor="pink"><?= $jdl ?></th>
				<?php } ?>
			</tr>
		</thead>
		<tbody>
			<?php

			/*

				1. cetak no urut menggunakan konsep increment dalam looping dikolom ke-1

				2. buat array scalar 5 buah:

                 nim, nama, nilai (data bebas)

				3. buat array associative untuk menghimpun ke-5 data mahasiswa di atas

				4. tentukan kelulusan dari mahasiswa dengan kriteria lulus minimal nilai 60

				   di kolom keterangan (gunakan ternary dan array column)

				5. tentukan grade dari nilai dengan kriteria:

				   A: 85 - 100, B: 75 - <85, C: 60 - <75, D: 30 - <60, E:0 - <30

				   (if multi kondisi & operator logic and) di kolom grade

				6. Tentukan predikat dari grade dengan kriteria:

				   A: Memuaskan, B: Bagus, C: Cukup, D: Kurang, E:Buruk

				   (switch case) di kolom Predikat

				7. Beri warna-warni untuk baris genap & ganjil

                 8. Pada TFoot buat aggregrate function array untuk menentukan:

                    Jumlah Siswa, Nilai Tertinggi, Nilai Terendah, Nilai Rata2

				*/

			$m1 = ['nim' => 101, 'nama' => 'Sudirman', 'nilai' => 40];
			$m2 = ['nim' => 102, 'nama' => 'Sukirman', 'nilai' => 85];
			$m3 = ['nim' => 103, 'nama' => 'Supriman', 'nilai' => 70];
			$m4 = ['nim' => 104, 'nama' => 'Sujiman', 'nilai' => 60];
			$m5 = ['nim' => 105, 'nama' => 'Sukijan', 'nilai' => 50];

			$dataMahasiswa = [$m1, $m2, $m3, $m4, $m5];

			$ar_nilai = array_column($dataMahasiswa, 'nilai');

			foreach ($dataMahasiswa as $key => $value) {
				$kelulusan = $ar_nilai[$key] >= 60 ? 'Lulus' : 'Tidak Lulus';
				$grade = '';
				if ($ar_nilai[$key] >= 85 && $ar_nilai[$key] <= 100) {
					$grade = 'A';
				} elseif ($ar_nilai[$key] >= 75 && $ar_nilai[$key] < 85) {
					$grade = 'B';
				} elseif ($ar_nilai[$key] >= 60 && $ar_nilai[$key] < 75) {
					$grade = 'C';
				} elseif ($ar_nilai[$key] >= 30 && $ar_nilai[$key] < 60) {
					$grade = 'D';
				} elseif ($ar_nilai[$key] >= 0 && $ar_nilai[$key] < 30) {
					$grade = 'E';
				}
				$predikat = '';
				switch ($grade) {
					case 'A':
						$predikat = 'Memuaskan';
						break;
					case 'B':
						$predikat = 'Bagus';
						break;
					case 'C':
						$predikat = 'Cukup';
						break;
					case 'D':
						$predikat = 'Kurang';
						break;
					case 'E':
						$predikat = 'Buruk';
						break;
					default:
				}
				$warna = $key % 2 == 0 ? 'lightblue' : 'lightgreen';
				echo '<tr bgcolor=' . $warna . ' class="bold">';
				echo '<td >' . ($key + 1) . '</td>';
				echo '<td >' . $value['nim'] . '</td>';
				echo '<td width="40%" >' . $value['nama'] . '</td>';
				echo '<td >' . $value['nilai'] . '</td>';
				echo '<td >' . $kelulusan . '</td>';
				echo '<td >' . $grade . '</td>';
				echo '<td >' . $predikat . '</td>';
				echo '</tr>';
			}
			?>

		</tbody>

		<tfoot cellpadding="3">
			<?php
			$jumlahSiswa = count($dataMahasiswa);
			$nilaiTertinggi = max($ar_nilai);
			$nilaiTerendah = min($ar_nilai);
			$nilaiRata2 = array_sum($ar_nilai) / count($ar_nilai);
			echo '<tr><th class="judul" colspan="7" bgcolor="black" style="color:white;">Keterangan</th></tr>';
			echo '<tr bgcolor="aquamarine">';
			echo '<th colspan="6">Jumlah Siswa</th>';
			echo '<td align="right" class="bold">' . $jumlahSiswa . '</td>';
			echo '</tr>';
			echo '<tr bgcolor="aquamarine">';
			echo '<th colspan="6">Nilai Tertinggi</th>';
			echo '<td align="right" class="bold">' . $nilaiTertinggi . '</td>';
			echo '</tr>';
			echo '<tr bgcolor="aquamarine">';
			echo '<th colspan="6">Nilai Terendah</th>';
			echo '<td align="right" class="bold">' . $nilaiTerendah . '</td>';
			echo '</tr>';
			echo '<tr bgcolor="aquamarine">';
			echo '<th colspan="6">Nilai Rata-rata</th>';
			echo '<td align="right" class="bold">' . $nilaiRata2 . '</td>';
			echo '</tr>';
			?>
		</tfoot>

	</table>
			<p align="center">&copy; M. Afkar Siddiq 2023</p>
</body>

</html>