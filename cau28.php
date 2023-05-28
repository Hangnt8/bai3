<?php
//28. Viết chương trình PHP để tính tổng các số lẻ từ 1 đến n.
function totalodd($n) {
  $total = 0; 
  for ($i = 1; $i <= $n; $i++) {
    if ($i % 2 != 0) {
      $total += $i; 
    }
  }
  return $total;
}
$n = 10; 
$end = totalodd($n);
echo "Tổng các số lẻ từ 1 đến $n là: $end";
?>