<?php
    function fibonacci($n) {
        if ($n == 0) {
            return 0;
        }
        if ($n == 1) {
            return 1;
        }
        // Công thức đệ quy: F(n) = F(n-1) + F(n-2)
        return fibonacci($n - 1) + fibonacci($n - 2);
    }

    $n = 10;
    $ketqua = fibonacci($n);

    echo "Số Fibonacci thứ $n là: $ketqua";
?>
