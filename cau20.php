<?php
//20. Viết chương trình PHP để thêm một phần tử vào đầu hoặc cuối của một mảng.
$myArray = [1, 2, 3, 4, 5];
function addToBeginning(&$array, $element)
{
    for ($i = count($array) - 1; $i >= 0; $i--) {
        $array[$i + 1] = $array[$i];
    }
    $array[0] = $element;
}
function addToEnd(&$array, $element)
{
    $array[] = $element;
}

addToBeginning($myArray, 0);

echo "Mảng sau khi thêm vào đầu: " . implode(", ", $myArray) . "\n";
addToEnd($myArray, 6);
echo "Mảng sau khi thêm vào cuối: " . implode(", ", $myArray) . "\n";
?>