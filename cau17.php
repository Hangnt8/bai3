<?php
//17.Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi Palindrome hay không.
function isPalindrome($str)
{
    $str = strtolower(preg_replace('/[^a-zA-Z]/', '', $str));

    return $str === strrev($str);
}
function checkPalindrome($str)
{
    if (isPalindrome($str)) {
        echo "Chuỗi '{$str}' là chuỗi Palindrome.";
    } else {
        echo "Chuỗi '{$str}' không phải là chuỗi Palindrome.";
    }
}
$testString = "Able was I ere I saw Elba";
checkPalindrome($testString);
?>