<?php
//13.Viết chương trình PHP để loại bỏ các phần tử trùng lặp trong một mảng.
    function removeDuplicates($array) {
        return array_values(array_unique($array));
    }

    $array = [1, 2, 2, 3, 4, 4, 5];
    $result = removeDuplicates($array);
    print_r($result);
?>
