<?php

$nama = "Eka";
$nilai = 84;

if ($nilai > 100) {
    echo "Nilai Eror";
} elseif ($nilai >= 90) {
    echo "Nilai Anda A";
}elseif ($nilai >= 80) {
    echo "Nilai Anda B";
}elseif ($nilai >= 70) {
    echo "Nilai Anda C";
}elseif ($nilai >= 69) {
    echo "Nilai Anda D";
}elseif ($nilai >= 0) {
    echo "Nilai Anda E";
}else {
    echo "Nilai Tidak Valid";
}

echo "<br>";
echo "Selamat $nama <br> Nilai anda adalah $nilai";