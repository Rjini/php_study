<?php
$file = fopen("write.txt", 'w');
fwrite($file, "안녕하세요.");
fclose($file);