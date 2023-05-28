<?php
//4.Viết chương trình PHP để kiểm tra xem một chuỗi có chứa một từ cụ thể hay không.
        function containsWord($string, $word) {
            if (strpos($string, $word) !== false) {
                return true;
            } else {
                return false;
            }
        }
        
        $string = "This is a sample string.";
        $word = "sample";
        if (containsWord($string, $word)) {
            echo "Chuỗi chứa từ '$word'.";
        } else {
            echo "Chuỗi không chứa từ '$word'.";
        }
?>