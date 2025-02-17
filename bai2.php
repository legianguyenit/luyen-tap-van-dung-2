<?php
    function kiemTraChanLe($n) {
        $ketQua = [
            0 => "Số $n là số chẵn.",
            1 => "Số $n là số lẻ."
        ];
        
        return $ketQua[$n % 2];
    }

    // Ví dụ sử dụng:
    echo kiemTraChanLe(24) . "</br>"; // Kết quả: Số 24 là số chẵn.
    echo kiemTraChanLe(7) . "</br>";  // Kết quả: Số 7 là số lẻ.
?>
