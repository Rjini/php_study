<?php
echo time()."<br/>";

$time = mktime(14, 20, 29, 1, 8, 2022);
echo $time."<br/>";
echo microtime()."<br/>";
echo microtime(true)."<br/>";
echo date('Y-m-d H:i:s', $time)."<br/>";

$datetime = new DateTime('2022-02-08 09:10:29');
echo $datetime -> format("Y-m-d H:i:s")."<br/>";

$datetime2 = new DateTime('2022-01-01 00:00:00');
$date_diff = $datetime -> diff($datetime2);
echo $date_diff -> format('%a')."<br/>";
echo $date_diff -> days."<br/>";