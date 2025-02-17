<?php
    function chuyenDoiInHoa($chuoi) {
        // Sử dụng strtoupper để chuyển toàn bộ chuỗi thành chữ in hoa
        return strtoupper($chuoi);
    }

    // Test hàm
    $chuoi = "hello world!";
    echo "Chuỗi sau khi chuyển thành in hoa: " . chuyenDoiInHoa($chuoi);
?>
