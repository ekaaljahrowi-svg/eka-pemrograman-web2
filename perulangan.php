
<?php

$bulan_lahir = 3;
$tanggal_lahir = 7;
$angka_favorit = 1;

for($i = 1; $i <= 31; $i++) {
    switch($i) {
        case $tanggal_lahir:
            echo "tanggal lahir saya: $i <br>";
            break;

        case $angka_favorit:
            echo "angka favorit saya: $i <br>";
            break;
        case $bulan_lahir:
            echo "bulan_lahir saya: $i <br>";
            break;
        default:
            echo "Angka : $i <br>";      
    }
}
?>
