<?php
$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

echo "NILAI SISWA <br><br>";
echo implode(", ", $nilaiSiswa) . "<br><br>";

// Mengurutkan nilai siswa dari yang terendah ke tertinggi
sort($nilaiSiswa);

// Menampilkan dua nilai terendah
echo "Dua nilai terendah: " . $nilaiSiswa[0] . ", " . $nilaiSiswa[1] . "<br>";

// Menampilkan dua nilai tertinggi
echo "Dua nilai tertinggi: " . $nilaiSiswa[count($nilaiSiswa) - 2] . ", " . $nilaiSiswa[count($nilaiSiswa) - 1] . "<br><br>";

// Menghapus dua nilai terendah dan dua nilai tertinggi
$totalNilai = 0;
$jumlahNilai = 0;

for ($i = 2; $i < count($nilaiSiswa) - 2; $i++) {
    $totalNilai += $nilaiSiswa[$i];
    $jumlahNilai++;
}

// Menghitung rata-rata
$rataRata = $totalNilai / $jumlahNilai;

echo "Total nilai setelah mengabaikan dua nilai tertinggi dan dua nilai terendah: " . $totalNilai . "<br>";
echo "Rata-rata nilai: " . $rataRata . "<br>";
?>
