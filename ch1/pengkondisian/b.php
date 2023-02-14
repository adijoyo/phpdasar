
    <?php

    $nilai=40;

    if ( $nilai > 100 ) {
        $ket = "jenius";
    } else if ($nilai > 89) {
        $ket = "pintar";
    } else if ($nilai > 79) {
        $ket = "lumayan pintar";
    } else if ($nilai > 69) {
        $ket = "biasa biasa saja";
    } else if ($nilai > 49) {
        $ket = "awikwiok";
    } 

    echo ("jika nilai anda"."".$nilai."".",maka menurut saya anda,"."".$ket);

    ?>
