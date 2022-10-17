<?php
$num = 255;
echo decbin($num)."<br/>";
echo decoct($num)."<br/>";
echo dechex($num)."<br/>";
echo "<br/>";
echo base_convert("255", 10, 16)."<br/>";
echo base_convert("ff", 16, 10)."<br/>";