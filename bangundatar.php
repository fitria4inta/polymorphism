<?php

// Parent Class
class BangunDatar {
    public function hitungLuas() {
        echo "Menghitung luas bangun datar";
    }
}

// Child Class Persegi
class Persegi extends BangunDatar {
    public $sisi;

    public function __construct($sisi) {
        $this->sisi = $sisi;
    }

    public function hitungLuas() {
        $luas = $this->sisi * $this->sisi;
        echo "Luas Persegi = " . $luas;
    }
}

// Child Class Lingkaran
class Lingkaran extends BangunDatar {
    public $jari;

    public function __construct($jari) {
        $this->jari = $jari;
    }

    public function hitungLuas() {
        $luas = 3.14 * $this->jari * $this->jari;
        echo "Luas Lingkaran = " . $luas;
    }
}

// Child Class Segitiga
class Segitiga extends BangunDatar {
    public $alas;
    public $tinggi;

    public function __construct($alas, $tinggi) {
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }

    public function hitungLuas() {
        $luas = 0.5 * $this->alas * $this->tinggi;
        echo "Luas Segitiga = " . $luas;
    }
}


// Membuat object
$persegi = new Persegi(4);
$lingkaran = new Lingkaran(7);
$segitiga = new Segitiga(6, 8);

// Memanggil method (polymorphism)
$persegi->hitungLuas();
echo "<br>";

$lingkaran->hitungLuas();
echo "<br>";

$segitiga->hitungLuas();

?>