<?php
define("CONSTANT_BOOL", true);
define("CONSTANT_INT", 1);
define("CONSTANT_FLOAT", 3.14);
define("CONSTANT_STRING", "문자열도 가능합니다.");
const OTHER = "또 다른 상수정의 방법";
#define("CONSTANT_INT", false); //에러
#define("1_CONSTANT_INT", "상수명은 숫자로 시작할 수 없습니다."); //에러