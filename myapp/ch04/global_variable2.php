<?php
$str = "PHP";

function myFunc() {
	echo "<p>변수 str의 값은 : {$GLOBALS['str']}</p>";
}

myFunc();
echo "<p>변수 str의 값은 : {$GLOBALS['str']}</p>";

//함수 안에서 global로 선언하여 전역 변수로 작용
//모든 전역 변수를 $GLOBALS[index] 배열에 자동으로 저장
//배열의 인덱스에는 변수의 이름을 넣어서 그 값에 액세스 가능
//위 내용은 전역 변수를 직접 업데이트하는 $GLOBALS[index] 배열 사용 예시임