<?php
$input = true;

$result = match ($input) {
	"true" => "1번째 결과",
	"false" => "2번째 결과",
	"null" => "3번째 결과",
	default => "결과 없음",
};

echo $result;