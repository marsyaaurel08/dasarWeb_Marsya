<?php
$kursiRestoran = 45;
$kursiDiPakai = 28;

echo "Sebuah restoran memiliki: {$kursiRestoran} kursi restoran
di dalamnya. <br>";
echo "Kursi yang dipakai oleh pelanggan: {$kursiDiPakai} kursi.<br>";

$kursiTersisa = $kursiRestoran - $kursiDiPakai;
$persentaseKursi = ($kursiRestoran -= $kursiDiPakai * 100 / 100) ;
echo "<br>Kursi Restoran yang tersisa: {$kursiTersisa} kursi.<br>";
echo "<br>Persentase kursi kosong adalah: {$persentaseKursi}% <br>";
?>