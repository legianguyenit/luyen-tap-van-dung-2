<?php
    function demSoTu($chuoi) {
        return str_word_count($chuoi);
    }

    $chuoi = "Hello Teacher Tung";
    echo "Số từ trong chuỗi là: " . demSoTu($chuoi);
?>