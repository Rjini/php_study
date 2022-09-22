<html>

	<head>
		<meta charset="utf-8">
		<title>example</title>
	</head>
	
	<body>
	<?php
		$year = date('Y'); //년
		$month = date('m'); //월
		$day = date('d'); //일
		$today = date('Y-m-d'); //년-월-일
	?>
		일반적인 HTML 페이지의 형태입니다. <br>
		올해는 <?php echo $year; ?>년 입니다. <br>
		지금은 <? echo $month; ?>월 입니다. <br>
		오늘은 <?= $day; ?>일 입니다. <br>
		오늘 날짜는 <?php echo $today; ?> 입니다. <br>
		---------------------- <br>
		이것은 html 태그로만 구성되어 있는 정적인 페이지를 수정하여 만든 동적 페이지 (변수 활용) <br>
		<br>
		참고 도서 : 그노위즈의 PHP & MySQL 웹 프로그래밍 입문 + 활용
	</body>
	
</html>