<?php
date_default_timezone_set("Asia/Jakarta");

$nama = readline('Masukkan nama Anda: ');
$waktu = date('H');
$menit = date('i');

$sapaan = "";
if ($waktu > 19) {
    $sapaan = "Selamat malam";
} elseif ($waktu > 15) {
    $sapaan = "Selamat sore";
} elseif ($waktu > 11) {
    $sapaan = "Selamat siang";
} elseif ($waktu > 5) {
    $sapaan = "Selamat pagi";
} else {
    $sapaan = "Selamat dini hari";
}

echo "{$sapaan}, {$nama}! Sekarang pukul {$waktu}:{$menit}\n";
?>