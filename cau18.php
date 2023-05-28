<?php
//18. Viết chương trình PHP để đếm số lần xuất hiện của một phần tử trong một mảng.
function countOccurrences($array, $element)
{
    $count = 0;
    foreach ($array as $value) {
        if ($value == $element) {
            $count++;
        }
    }
    return $count;
}

$array = [1, 2, 3, 4, 2, 2, 3, 1, 4, 4];
$element = 2;

$occurrences = countOccurrences($array, $element);
echo "Số lần xuất hiện của phần tử $element trong mảng là: $occurrences";
?>