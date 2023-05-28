<?php
//11.Viết chương trình PHP để kiểm tra xem một số có phải là số Armstrong hay không.
    function isArmstrongNumber($number) {
        $sum = 0;
        $temp = $number;
        $digits = strlen($number);
        
        while ($temp != 0) {
            $remainder = $temp % 10;
            $sum += pow($remainder, $digits);
            $temp = (int)($temp / 10);
        }
        
        return $sum == $number;
    }
    
    $number = 153;
    if (isArmstrongNumber($number)) {
        echo "$number là số Armstrong.";
    } else {
        echo "$number không là số Armstrong.";
    }
    ?>