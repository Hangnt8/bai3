<?php
//15.Viết chương trình PHP để đảo ngược một chuỗi.
    function reverseString($string) {
        return strrev($string);
    }

    $string = "Hello, World!";
    $reversedString = reverseString($string);
    echo $reversedString;
    ?>