<?php
//14.Viết chương trình PHP để tìm vị trí của một phần tử trong một mảng.
    function findElementIndex($array, $element) {
        $index = array_search($element, $array);
        return $index !== false ? $index : -1;
    }

    $array = [1, 2, 3, 4, 5];
    $element = 3;

    $index = findElementIndex($array, $element);
    echo "Vị trí của $element trong mảng là: $index";
?>