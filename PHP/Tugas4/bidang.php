<?php 
    // Buatlah Class Bidang, simpan dengan nama file Bidang.php

    // Buat variabel nama, nilai1 dan nilai2
    // Buat konstuktor dengan parameter nama, nilai1 dan nilai2
    // Buat fungsi luas() untuk mentukan luas bidang, berdasarkan bidang yg diinput (lingkaran, persegi panjang, segitiga). Gunakan struktur kendali switch case
    // Buat fungsi cetak(luasBidang) berdasarkan bidang yang diinput
    class Bidang{
        public $nama = '';
        public $nilai1, $nilai2;
        
        function __construct($nama, $nilai1, $nilai2){
            $this->nama = $nama;
            $this->nilai1 = $nilai1;
            $this->nilai2 = $nilai2;
            
        }
        
        function luas(){
            switch ($this->nama) {
                case 'lingkaran':
                $luas = 3.14 * $this->nilai1 * $this->nilai1;
                break;
                case 'persegi panjang':
                $luas = $this->nilai1 * $this->nilai2;
                break;
                case 'segitiga':
                $luas = 0.5 * $this->nilai1 * $this->nilai2;
                break;
                default:
                $luas = 0;
                break;
            }
            return $luas;
        }
        function cetak($luasBidang){
            echo "Luas bidang $this->nama adalah $luasBidang";
        }

    }

?>
