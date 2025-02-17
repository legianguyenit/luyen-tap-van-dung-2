<?php
    function demKyTuXuatHien($chuoi, $kyTu) {
        return substr_count($chuoi, $kyTu);
    }

    $chuoi = "Le Gia Nguyen hahahhaha ";
    $kyTu = "ha";
    echo "Số lần ký tự '$kyTu' xuất hiện trong chuỗi là: " . demKyTuXuatHien($chuoi, $kyTu);
?>
