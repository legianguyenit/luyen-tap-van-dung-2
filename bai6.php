<?php
    $nam = 2028;
    
    function kiemTraNamNhuan($nam) {
        if (($nam % 4 == 0 && $nam % 100 != 0) || ($nam % 400 == 0)) {
            return true;
        }
        return false;
    }

    if (kiemTraNamNhuan($nam)) {
        echo "$nam là năm nhuận.";
    } else {
        echo "$nam không phải là năm nhuận.";
    }
?>
