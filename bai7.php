<?php
    function demSoTu($chuoi) {
        return str_word_count($chuoi); // Đếm số từ trong chuỗi
    }

    // Gọi thử hàm
    $chuoi = "Ab a";
    echo "Số từ trong chuỗi là: " . demSoTu($chuoi);
?>
