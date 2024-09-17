<?php
$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

echo "NILAI SISWA <br><br>";
echo implode(", ", $nilaiSiswa) . "<br><br>";

// Mengurutkan nilai siswa dari yang terendah ke tertinggi
sort($nilaiSiswa);

// Menampilkan dua nilai terendah
$duaTerendah = array_slice($nilaiSiswa, 0, 2);
echo "Dua nilai terendah: " . implode(", ", $duaTerendah) . "<br>";

// Menampilkan dua nilai tertinggi
$duaTertinggi = array_slice($nilaiSiswa, -2);
echo "Dua nilai tertinggi: " . implode(", ", $duaTertinggi) . "<br><br>";

// Menghapus dua nilai terendah dan dua nilai tertinggi
$nilaiYangDipakai = array_slice($nilaiSiswa, 2, -2);

// Menghitung total nilai setelah mengabaikan dua nilai tertinggi dan dua nilai terendah
$totalNilai = array_sum($nilaiYangDipakai);

// Menghitung rata-rata
$rataRata = $totalNilai / count($nilaiYangDipakai);

echo "Total nilai setelah mengabaikan dua nilai tertinggi dan dua nilai terendah: " . $totalNilai . "<br>";
echo "Rata-rata nilai: " . $rataRata . "<br>";
?>
