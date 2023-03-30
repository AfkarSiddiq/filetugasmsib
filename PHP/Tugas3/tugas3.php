<!DOCTYPE html>
<html>
	<head>
		<title>Daftar Nilai Mahasiswa</title>
	</head>
	<body>
		<h3>Daftar Mahasiswa</h3>
		<table align="center" width="40%">
			<thead>
				<tr>
				<?php
				//looping array judul kolom: no, nim, nama, nilai, keterangan, grade, predikat	
				?>
				</tr>
			</thead>
			<tbody>
                <?php
				/*
				1. cetak no urut menggunakan konsep increment dalam looping dikolom ke-1
				2. buat array nim sebanyak 10 buah (111 s.d 121) lalu looping dikolom ke-2
				3. buat array nama sebanyak 10 nama (nama bebas) lalu looping dikolom ke-3
				4. buat array nilai sebanyak 10 nama (nilai bebas) lalu looping dikolom ke-4
				5. tentukan kelulusan dari mahasiswa dengan kriteria lulus minimal nilai 60
				   (ternary) dikolom ke-5
				6. tentukan grade dari nilai dengan kriteria:
				   A: 85 - 100, B: 75 - <85, C: 60 - <75, D: 30 - <60, E:0 - <30
				   (if multi kondisi & operator logic and) dikolom ke-6
				7. tentukan predikat dari grade dengan kriteria:
				   A: Memuaskan, B: Bagus, C: Cukup, D: Kurang, E:Buruk
				   (switch case) dikolom ke-7
				8. Beri warna-warni untuk baris genap & ganjil
				*/
                ?>
            </tbody>
		</table>
	</body>
</html>