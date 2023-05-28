<?php
//6.Viết chương trình PHP để sắp xếp một mảng theo thứ tự tăng dần.
  function sortArray($array) {
        sort($array);
        return $array;
    }

    $array = array(5, 3, 8, 1, 2);
    $sortedArray = sortArray($array);
    echo "Mảng sau khi sắp xếp theo thứ tự tăng dần là: ";
    foreach ($sortedArray as $value) {
        echo $value . " ";
    }
?>