<?php
//10.Viết chương trình PHP để in ra các số Fibonacci trong một khoảng cho trước.
    function fibonacci($n) {
        if ($n == 0)
            return 0;
        elseif ($n == 1)
            return 1;
        else
            return (fibonacci($n - 1) + fibonacci($n - 2));
    }
    
    function printFibonacciRange($start, $end) {
        for ($i = $start; $i <= $end; $i++) {
            echo fibonacci($i) . " ";
        }
    }
    
    $start = 0;
    $end = 10;
    
    echo "Các số Fibonacci trong khoảng $start đến $end là: ";
    printFibonacciRange($start, $end);
    ?>