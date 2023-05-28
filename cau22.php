<?php
//22. Viết chương trình PHP để tìm ước số chung lớn nhất và bội số chung nhỏ nhất của hai số nguyên dương.
function findGCD($num1, $num2)
{
    while ($num2 != 0) {
        $temp = $num1 % $num2;
        $num1 = $num2;
        $num2 = $temp;
    }
    return $num1;
}
function findLCM($num1, $num2)
{
    $gcd = findGCD($num1, $num2);
    $lcm = ($num1 * $num2) / $gcd;
    return $lcm;
}
$number1 = 36;
$number2 = 48;
$gcd = findGCD($number1, $number2);
$lcm = findLCM($number1, $number2);
echo "Ước số chung lớn nhất của $number1 và $number2 là: $gcd";
echo "<br>";
echo "Bội số chung nhỏ nhất của $number1 và $number2 là: $lcm";
?>