<?php
    function kiemTraSoNguyenTo($n) {
        if ($n < 2) {
            return false;
        }
        for ($i = 2; $i <= $n / 2; $i++) {
            if ($n % $i == 0) {
                return false;
            }
        }
        return true;
    }

    $so = 13;
    if (kiemTraSoNguyenTo($so)) {
        echo "$so là số nguyên tố.";
    } else {
        echo "$so không phải là số nguyên tố.";
    }
?>
