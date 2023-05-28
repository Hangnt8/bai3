<?php
//19. Viết chương trình PHP để sắp xếp một mảng theo thứ tự giảm dần.
function bubbleSort($arr)
{
    $n = count($arr);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($arr[$j] < $arr[$j + 1]) {
                // Hoán đổi các phần tử
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }
    return $arr;
}
$numbers = [5, 3, 8, 1, 2];
echo "Mảng trước khi sắp xếp: " . implode(", ", $numbers) . "\n";
$sortedNumbers = bubbleSort($numbers);
echo "Mảng sau khi sắp xếp: " . implode(", ", $sortedNumbers) . "\n";
?>