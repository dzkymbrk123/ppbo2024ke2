<?php

define('PI', 3.14);

function luasLingkaran($jari) : float {
    return PI * $jari * $jari;
}

function kelilingLingkaran($jari) : float {
    return 2 * PI * $jari;
}

function volumeBola($jari) : float {
    return (4/3) * PI * pow($jari, 3);
}

function volumeTabung($jari, $tinggi) : float {
    return PI * $jari * $jari * $tinggi;
}

function volumeKerucut($jari, $tinggi) : float {
    return (1/3) * PI * $jari * $jari * $tinggi;
}

$jari = 45;
$tinggi = 30;

$luas_tanah = luasLingkaran($jari);
$keliling_tanah = kelilingLingkaran($jari);
$volume_bola = volumeBola($jari);
$volume_tabung = volumeTabung($jari, $tinggi);
$volume_kerucut = volumeKerucut($jari, $tinggi);

echo "Luas tanah Budi adalah {$luas_tanah}\n";
echo "Keliling tanah Budi adalah {$keliling_tanah}\n";
echo "Volume bola dengan jari-jari yang sama adalah {$volume_bola}\n";
echo "Volume tabung dengan jari-jari dan tinggi yang diberikan adalah {$volume_tabung}\n";
echo "Volume kerucut dengan jari-jari dan tinggi yang diberikan adalah {$volume_kerucut}\n";