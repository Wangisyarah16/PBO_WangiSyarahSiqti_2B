<?php
class TokoPegadenSyariah {
    // Properties
    var $NamaToko = "TOKO PEGADEN SYARIAH";
    var $Alamat = "Jl. Keadilan No. 16";
    var $Telepon = "72353459";
    
    // Function untuk menghitung besaran angsuran hutang
    public function HitungAngsuranHutang($BesarPinjaman, $Bunga, $LamaAngsuran) {
        // Menghitung besar bunga
        $BesarBunga = ($BesarPinjaman * $Bunga) / 100;
        
        // Menghitung total pinjaman
        $TotalPinjaman = $BesarPinjaman + $BesarBunga;
        
        // Menghitung besaran angsuran bulanan
        $BesaranAngsuran = $TotalPinjaman / $LamaAngsuran;
        
        return $BesaranAngsuran;
    }
}

// Membuat objek dari class TokoPegadenSyariah
$Toko = new TokoPegadenSyariah();

// menampilkan Informasi toko
echo "Nama Toko: " . $Toko->NamaToko . "<br>";
echo "Alamat: " . $Toko->Alamat . "<br>";
echo "Telepon: " . $Toko->Telepon . "<br>";

// Menghitung besaran angsuran hutang
$BesarPinjaman = 1000000; // Besaran pinjaman
$Bunga = 10; // Besar bunga dalam persen
$LamaAngsuran = 5; // Lama angsuran dalam bulan

$BesaranAngsuran = $Toko->HitungAngsuranHutang($BesarPinjaman, $Bunga, $LamaAngsuran);

echo "Besaran Pinjaman: Rp " . number_format($BesarPinjaman, 0, ",", ".") . "<br>";
echo "Besar Bunga (%): " . $Bunga . "%<br>";
echo "Total Pinjaman: Rp " . number_format($BesarPinjaman + (($BesarPinjaman * $Bunga) / 100), 0, ",", ".") . "<br>";
echo "Lama Angsuran (bulan): " . $LamaAngsuran . "<br>";
echo "Besaran AngsuranS: Rp " . number_format($BesaranAngsuran, 0, ",", ".");
?>
