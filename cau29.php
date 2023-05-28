<?php
//29. Viết chương trình PHP để tìm số chính phương trong một khoảng cho trước.
function isPerfectSquare($number) {
    $sqrt = sqrt($number);
    return ($sqrt == intval($sqrt));
}
function findPerfectSquares($start, $end) {
    $result = [];
    for ($i = $start; $i <= $end; $i++) {
        if (isPerfectSquare($i)) {
            $result[] = $i;
        }
    }
    return $result;
}
$start = 1;
$end = 100;
$perfectSquares = findPerfectSquares($start, $end);
echo "Các số chính phương trong khoảng từ $start đến $end là:<br>";
foreach ($perfectSquares as $square) {
    echo $square . "<br>";
}
?>