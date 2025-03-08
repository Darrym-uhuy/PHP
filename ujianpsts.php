<?php
function fibonacci_until_limit($limit) {
    $a = 0;
    $b = 1;
    $index = 1; // Nomor urut
    
    while ($a <= $limit) {
        // Jika nomor urut adalah 21, tambahkan nama di samping angka Fibonacci
        if ($index == 26) {
            echo "$index. $a - Muhammad Ridwan<br>";
        } else {
            echo "$index. $a<br>"; // Menampilkan nomor urut di kiri
        }
        
        $temp = $a + $b;
        $a = $b;
        $b = $temp;
        $index++; // Tambah nomor urut
    }
}

// Cetak Fibonacci sampai 514229 dengan nama di nomor 21
fibonacci_until_limit(514229);
?>