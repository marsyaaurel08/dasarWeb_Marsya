<?php
    
    $skorGame = [85, 92, 78, 64, 90, 55, 88, 79, 70, 96];

    $totalSkor = 0; 
    foreach ($skorGame as $skor) {
        $totalSkor += $skor; 
    }

    $hadiah = ($totalSkor > 500) ? 'YA' : 'TIDAK';

    echo "Skor game yang didapatkan oleh pemain: <br>";
    foreach ($skorGame as $skor) {
        echo "Poin: {$skor}<br>";
    }

    echo "Total skor pemain adalah: {$totalSkor}<br>";
    echo "Apakah pemain mendapatkan hadiah tambahan? {$hadiah}";
?>
