<?php
$tahun = 2023;
$tanggallahir = 2000;
$umur = $tahun - $tanggallahir;
$nama = "dzikry";
$gaji = 1000000;  
$tunjangan = 500000;
$potongan = 300000;
$tarifTol = 100000;
$jumlahBayar = 80000; 

echo "===============TOKOH IT===============<br>";
echo "Nama          : Elon Reeve Musk <br>";
echo "Lahir         : 28 Juni 1971 <br>";
echo "Alamat        : Los Angeles <br>";
echo "Pekerjaan     : Pengusaha Teknologi <br>";
echo "Tahun aktif   : 1995 - sekarang <br>";
echo "<br> <br>";

// Menghitung Masa Kerja
echo "===============MENGHITUNG MASA KERJA===============<br>";

echo "Nama            : $nama<br>";
echo "Tahun Lahir      : $tanggallahir <br>";
echo "Umur $nama adalah $umur tahun <br>";
echo "<br><br>";

// Menghitung Upah Kerja
echo "===============MENGHITUNG UPAH KERJA===============<br>";
echo "NAMA            : $nama<br>";
echo "GAJI            : $gaji<br>";
echo "TUNJANGAN       : $tunjangan <br>";
echo "POTONGAN        : $potongan <br>";
$upah_bersih = $gaji + $tunjangan - $potongan;
echo "UPAH BERSIH     : $upah_bersih <br>";
echo "<br><br>";

// program masuk tol
echo "===============program masuk tol===============<br>";
if ($jumlahBayar >= $tarifTol) {
    $kembalian = $jumlahBayar - $tarifTol;
    echo "Selamat Anda memasuki jalan tol Subang-Bandung. Kembalian Anda: Rp. $kembalian";
} else {
    echo "Mohon maaf, saldo Anda kurang. Mohon top-up terlebih dahulu.";
}

echo "<br><br>";

// Program tiket masuk stadion
echo "===============Tiket Masuk Stadion===============<br>";
if ($umur < 10) {
    echo "Mohon maaf $nama, kamu tidak memenuhi syarat masuk stadion.";
} elseif ($umur >= 10 && $umur < 18) {
    echo "Selamat $nama, menonton pada tribun VIP.";
} elseif ($umur >= 18) {
    echo "Selamat $nama, menonton pada tribun VVIP.";
} else {
    echo "Tiket tidak tersedia.";
}
?>
