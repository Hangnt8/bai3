<?php
//2.Viết chương trình PHP để tính tổng của các số từ 1 đến n.
    function calculateSum($n) {
        $sum = 0;
        for ($i = 1; $i <= $n; $i++) {
            $sum += $i;
        }
        return $sum;
    }
    
    $n = 10;
    $sum = calculateSum($n);
    echo "Tổng các số từ 1 đến $n là: $sum";
?>