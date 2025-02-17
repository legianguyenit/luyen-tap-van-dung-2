<?php
    function tachChuoi($chuoi, $kyTuPhanCach) {
        return explode($kyTuPhanCach, $chuoi);
    }

    $chuoi = "Lê,Gia,Nguyên,23TCTH11B";
    $kyTuPhanCach = ",";
    $mang = tachChuoi($chuoi, $kyTuPhanCach);

    echo "Mảng sau khi tách chuỗi: ";
    echo ("<pre>");
    print_r($mang);
?>
