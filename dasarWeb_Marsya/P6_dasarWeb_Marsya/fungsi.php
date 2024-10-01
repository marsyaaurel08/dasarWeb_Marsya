<?php

//membuat fungsi
//function perkenalan(){
//    echo "Assalamualaikum, ";
  //  echo "Perkenalkan, nama saya Marsya<br/>";
    //echo "Senang berkenalan dengan Anda<br/>";
//}

//memanggil fungsi yang sudah dibuat
//perkenalan();
//perkenalan();

//FUNGSI BERPARAMETER
//membuat fungsi
//function perkenalan($nama, $salam){
   // echo  $salam. ", ";
    //echo "Perkenalkan, nama saya ". $nama. "<br/>";
    //echo "Senang berkenalan dengan Anda<br/>";
//}

//memanggil fungsi yang sudah dibuat
//perkenalan("Aurelia","Hallo");

//echo "<hr>";

//$saya = "Marsya";
//$ucapanSalam = "Selamat pagi";

//memanggil lagi 
//perkenalan($saya, $ucapanSalam);

//FUNGSI DENGAN NILAI DEFAULT
//membuat fungsi
function perkenalan($nama, $salam="Assalamualaikum"){
    echo  $salam. ", ";
    echo "Perkenalkan, nama saya ". $nama. "<br/>";
    echo "Senang berkenalan dengan Anda<br/>";
}

//memanggil fungsi yang sudah dibuat
perkenalan("Aurelia","Hallo");

echo "<hr>";

$saya = "Marsya";
$ucapanSalam = "Selamat pagi";

//memanggil lagi tanpa mengisi parameter salam
perkenalan($saya);
?>