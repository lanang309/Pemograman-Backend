<?php

# Membuat Fungsi
function hitungLuasLingkaran($jari){
    $phi = 3.14;
    $luasLingkaran = $phi * $jari * $jari;
    return $luasLingkaran; 
}

# Memanggil Fungsi
echo hitungLuasLingkaran(5);
echo "<br>";
echo hitungLuasLingkaran(7);
echo "<br>";
echo hitungLuasLingkaran(9);

?>