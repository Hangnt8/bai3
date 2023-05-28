<?php
//30. Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi con của một chuỗi khác hay không.
function isSubstring($str, $subStr)
{
    if (strpos($str, $subStr) !== false) {
        return true;
    } else {
        return false;
    }
}

$mainString = "Hello, world!";

$subString = "world";

if (isSubstring($mainString, $subString)) {
    echo "Chuỗi '$subString' là chuỗi con của '$mainString'.";
} else {
    echo "Chuỗi '$subString' không là chuỗi con của '$mainString'.";
}
?>