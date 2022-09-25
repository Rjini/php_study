<?php
$str = "PHP";

function myFunc() {
	echo "<p>변수 str의 값은 : {$str}</p>";
}

myFunc();
echo "<p>변수 str의 값은 : {$str}</p>";

//변수가 함수 외부에서만 액세스 가능
//함수 내부에서 변수를 호출하면 에러