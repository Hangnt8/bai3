<?php
//1.Viết chương trình PHP để kiểm tra xem một số có phải là số chẵn hay không.
    function isEven($number) {
        if ($number % 2 == 0) {
            return true;
        } else {
            return false;
        }
    }

    $number = 6;
    if (isEven($number)) {
        echo "$number là số chẵn.";
    } else {
        echo "$number không là số chẵn.";
    }
    ?>