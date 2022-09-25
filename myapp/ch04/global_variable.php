<?php
$str = "PHP";

function myFunc() {
	global $str;
	echo "<p>변수 str의 값은 : {$str}</p>";
}

myFunc();
echo "<p>변수 str의 값은 : {$str}</p>";

//함수 안에서 global로 선언하여 전역 변수로 작용