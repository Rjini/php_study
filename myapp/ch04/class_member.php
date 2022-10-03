<?php
class Member {
	var $id = 'hong';
	public $name = '홍길동';
	protected $nickname = '쾌도 홍길동';
	private $age = 20;
}

$member = new Member();
echo $member->id;
echo $member->name;
echo $member->nickname;
echo $member->age;