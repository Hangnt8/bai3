<?php
//7.Viết chương trình PHP để tính giai thừa của một số nguyên dương.
    function calculateFactorial($n) {
        if ($n == 0) {
            return 1;
        } else {
            return $n * calculateFactorial($n - 1);
        }
    }

    $n = 5;
    $factorial = calculateFactorial($n);
    echo "Giai thừa của $n là: $factorial";
?>