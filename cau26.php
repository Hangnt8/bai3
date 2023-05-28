<?php
//26. Viết chương trình PHP để tìm số dương lớn nhất trong một mảng.
function findLargestPositiveNumber($arr) {
    $largestPositiveNumber = null;
    foreach ($arr as $num) {
        if ($num > 0 && ($largestPositiveNumber === null || $num > $largestPositiveNumber)) {
            $largestPositiveNumber = $num;
        }
    }
    return $largestPositiveNumber;
}

$array = [5, -10, 15, -20, 25, 30];

$result = findLargestPositiveNumber($array);
if ($result !== null) {
    echo "Số dương lớn nhất trong mảng là: " . $result;
} else {
    echo "Không có số dương trong mảng";
}
?>