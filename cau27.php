<?php
//27. Viết chương trình PHP để tìm số âm lớn nhất trong một mảng.
function findnumber ($mang)
{
    $findnumber = null;
    foreach ($mang as $so) {
        if ($so < 0 && ($findnumber === null || $so > $findnumber)) {
            $findnumber = $so;
        }
    }
    return $findnumber;
}

$mang = [3, -2, 7, -5, 0, -8, 4];
$findnumber = findnumber($mang);
if ($findnumber !== null) {
    echo "Số âm lớn nhất trong mảng là: " . $findnumber;
} else {
    echo "Không có số âm trong mảng.";
}
?>