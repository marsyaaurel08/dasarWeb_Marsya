<?php
$hargaProduk = 120000; 
$diskon = 0; 

echo "Harga produk: Rp {$hargaProduk}" ;


if ($hargaProduk > 100000) {
    $diskon = 20; 
    $hargaDiskon = $hargaProduk * ($diskon / 100); 
    $hargaAkhir = $hargaProduk - $hargaDiskon; 
    
    echo "<br>Diskon: " . $diskon . "%";
    echo "<br>Harga diskon dalam bentuk rupiah: Rp {$hargaDiskon}";
    echo "<br>Harga setelah diskon: Rp {$hargaProduk} - Rp {$hargaDiskon} = {$hargaAkhir}";
} else {

}

?>
