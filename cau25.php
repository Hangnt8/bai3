<?php
//25. Viết chương trình PHP để kiểm tra xem một số có phải là số nguyên tố hay không.
function isPrime($number)
{
    if ($number <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }
    return true;
}
$number = 17; // Số cần kiểm tra
if (isPrime($number)) {
    echo "$number là số nguyên tố";
} else {
    echo "$number không phải là số nguyên tố";
}
?>