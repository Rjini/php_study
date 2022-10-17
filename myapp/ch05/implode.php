<?php
$str = [ 'www', 'gnuwiz', 'com', ];

echo implode(array: $str)."<br/>";
echo implode(separator: '.', array: $str)."<br/>";
echo "<br/>";

echo join(array: $str)."<br/>";
echo join(separator: '.', array: $str)."<br/>";
echo "<br/>";