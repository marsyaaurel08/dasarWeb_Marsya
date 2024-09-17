<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Bilangan 1= {$a} <br>";
echo "Bilangan 2= {$b} <br>";
echo "<br>";
echo "Hasil Tambah: {$hasilTambah}" ;
echo "<br>";
echo "Hasil Kurang: {$hasilKurang}" ;
echo "<br>";
echo "Hasil Kali: {$hasilKali}" ;
echo "<br>";
echo "Hasil Bagi: {$hasilBagi}" ;
echo "<br>";
echo "Sisa Bagi: {$sisaBagi}" ;
echo "<br>";
echo "Hasil Pangkat: {$pangkat}" ;
echo "<br><br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "Hasil Sama: {$hasilSama}" ;
echo "<br>";
echo "Hasil Tidak Sama: {$hasilTidakSama}" ;
echo "<br>";
echo "Hasil Lebih Kecil: {$hasilLebihKecil}" ;
echo "<br>";
echo "Hasil Lebih Besar: {$hasilLebihBesar}" ;
echo "<br>";
echo "Hasil Lebih Kecil Sama: {$hasilLebihKecilSama}" ;
echo "<br>";
echo "Hasil Lebih Besar Sama: {$hasilLebihBesarSama}" ;
echo "<br>";

?>