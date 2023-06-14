<?php

// Array daftar makanan
$daftarMakanan = array("Nasi Goreng", "Ayam Bakar", "Soto Ayam", "Mie Goreng", "Rendang");

// Perulangan untuk mencetak daftar makanan
echo "Daftar Makanan:\n";
foreach ($daftarMakanan as $makanan) {
    echo "- $makanan\n";
}

// Percabangan untuk menentukan makanan favorit
$makananFavorit = "Soto Ayam";
if (in_array($makananFavorit, $daftarMakanan)) {
    echo "\nMakanan favorit Anda, $makananFavorit, tersedia di daftar makanan!";
} else {
    echo "\nMaaf, makanan favorit Anda tidak tersedia di daftar makanan.";
}

?>






