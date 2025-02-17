<?php
    function mayTinh($a, $b, $phepTinh) {
        if ($phepTinh === '/' && $b == 0) {
            return "Lỗi: Không thể chia cho 0.";
        }
        $phepToan = [
            '+' => $a + $b,
            '-' => $a - $b,
            '*' => $a * $b,
            '/' => $a / $b,
        ];
        return $phepToan[$phepTinh];
    }

    // Ví dụ sử dụng
    echo mayTinh(10, 5, '+') . "</br>"; // Kết quả: 15
    echo mayTinh(10, 5, '-') . "</br>"; // Kết quả: 5
    echo mayTinh(10, 5, '*') . "</br>"; // Kết quả: 50
    echo mayTinh(10, 0, '/') . "</br>"; // Kết quả: Lỗi: Không thể chia cho 0.
?>
