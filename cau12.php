<?php
//12Viết chương trình PHP để chèn một phần tử vào một mảng ở vị trí bất kỳ.

    function insertElement($array, $element, $position) {
        array_splice($array, $position, 0, $element);
        return $array;
    }

    $array = [1, 2, 4, 5];
    $element = 3;
    $position = 2;

    $result = insertElement($array, $element, $position);
    print_r($result);
?>