<?php
//5.Viết chương trình PHP để tìm giá trị lớn nhất và nhỏ nhất trong một mảng.
    function findMinMax($array) {
        $minValue = min($array);
        $maxValue = max($array);
        return array("min" => $minValue, "max" => $maxValue);
    }

    $array = array(10, 5, 8, 3, 1);
    $result = findMinMax($array);
    echo "Giá trị nhỏ nhất trong mảng là: " . $result['min'] . "<br>";
    echo "Giá trị lớn nhất trong mảng là: " . $result['max'];
?>