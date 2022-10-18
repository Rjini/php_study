<?php
$timestamp = mktime(hour: 0, minute: 0, second: 0, month: 1, day: 8, year: 2022);

date_default_timezone_set(timezoneId: "America/New_York");
echo date(format: 'Y-m-d H:i:s', timestamp: $timestamp)."<br/>";

date_default_timezone_set(timezoneId: "Asia/Seoul");
echo date(format: 'Y-m-d H:i:s', timestamp: $timestamp)."<br/>";