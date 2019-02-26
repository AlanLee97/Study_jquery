<?php
	//1. 纯文本/html文件
//	echo "<h2>我是GET请求返回的数据。</h2>";
	
	//2. xml文件
/*	echo <<<'XML'
	<?xml version="1.0" encoding="utf-8"?>
	<info>
		<name>AlanLee</name>
		<age>22</age>
		<sex>male</sex>
		<school>ZDXH</school>

	</info>
	XML;
*/

	//3. json
	$person = [
		"name" => "AlanLee",
		"age" => 22,
		"sex" => "male",
		"school" => "ZDXH"
	];
	echo json_encode($person);
?>
