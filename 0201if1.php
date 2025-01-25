<?php
    $hasil = "lulus";
    if ($hasil == "lulus") {
        echo "Selamat anda $hasil";
    } else {
        echo "Maaf anda $hasil";
    }

    echo "<h1>contoh IF dengan 2 pilihan</h1>";
    if ($hasil == "lulus") {
        echo "Selamat anda $hasil";
    } else {
        echo "Maaf anda $hasil";
    }

echo "<h1>contoh IF dengan 3 pilihan</h1>";
# 60-100 Lulus
# 50-59 Remedial
# 0-49 Tidak Lulus
$nilai = 120;
    echo "<h2>batas bawah</h2>";
    if ($nilai >= 60) {
        echo "Selamat anda <b>Lulus</b>. nilai anda $nilai";
    }elseif ($nilai >= 50) {
        echo "anda <b>Remedial</b>. nilai anda $nilai";
    }else{
        echo "maaf anda <b>Tidak Lulus</b>. nilai anda $nilai";
}
    echo "<h2>batas atas</h2>";
    if ($nilai < 50) {
        echo "maaf anda <b>Tidak Lulus</b>. nilai anda $nilai";
    }elseif ($nilai < 60) {
        echo "anda <b>Remedial</b>. nilai anda $nilai";
    }else{
        echo "Selamat anda <b>Lulus</b>. nilai anda $nilai";
    }

    echo "<h2>batas atas dan bawah</h2>";
    if ($nilai >= 60 AND $nilai <= 100) {
        echo "Selamat anda <b>Lulus</b>. nilai anda $nilai";
    }elseif ($nilai >= 50 AND $nilai < 60) {
        echo "anda <b>Remedial</b>. nilai anda $nilai";
    }elseif ($nilai >= 0 AND $nilai < 50) {
        echo "maaf anda <b>Tidak Lulus</b>. nilai anda $nilai";
    }else{
        echo"tidak ada kategori untuk nilai $nilai";
    }

