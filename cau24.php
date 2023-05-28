<?php
//24. Viết chương trình PHP để tìm số lẻ lớn nhất trong một mảng.
function findMaxOdd($arr) {
    $maxOdd = null;
    foreach ($arr as $num) {
        if ($num % 2 != 0 && ($maxOdd === null || $num > $maxOdd)) {
            $maxOdd = $num;
        }
    }
    return $maxOdd;
}

$numbers = [2, 5, 9, 12, 7, 4, 3, 10];

$maxOddNumber = findMaxOdd($numbers);

if ($maxOddNumber === null) {
    echo "Không có số lẻ trong mảng.";
} else {
    echo "Số lẻ lớn nhất trong mảng là: " . $maxOddNumber;
}
?>