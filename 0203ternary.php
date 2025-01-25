 <?php
    echo "<h1>contoh ternary</h1>";
    $gender = "laki-laki";
    echo $gender == "laki-laki" ? "laki-laki" : "perempuan";

    echo "<hr>";
    if ($gender == "laki-laki") {
        echo "laki-laki";
    } else {    
        echo "perempuan";
    }

    echo "<hr>";
    $waktu =20;
    echo $waktu <= 18 ? "siang" : "malam";

    echo "<hr>";
    if ($waktu <= 20) {
        echo "siang";
    } else {
        echo "malam";
    }
