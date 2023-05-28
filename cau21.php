<?php
//21. Viết chương trình PHP để tìm số lớn thứ hai trong một mảng.
function find_second_largest($arr) {
    rsort($arr);
    return isset($arr[1]) ? $arr[1] : "Không có số lớn thứ hai trong mảng";
}

// Mảng gốc
$array = [10, 5, 8, 12, 7];
echo "Mảng: " . implode(" ", $array) . "\n";

// Tìm số lớn thứ hai
$second_largest = find_second_largest($array);
echo "Số lớn thứ hai trong mảng là: " . $second_largest;
?>