<?php
$str = "hello gnuwiz.com";

$result = str_contains(haystack: $str, needle: "gnuwiz");
echo $result."<br/>";

$result2 = str_starts_with(haystack: $str, needle: "hello");
echo $result2."<br/>";

$result3 = str_ends_with(haystack: $str, needle: "com");
echo $result3."<br/>";