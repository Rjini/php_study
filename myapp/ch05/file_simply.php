<?php
$filename = "text.txt";
$content = file_get_contents(filename: $filename);
file_put_contents(filename: "text2.txt", data: $content);