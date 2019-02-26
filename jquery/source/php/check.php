<?php
	$name = isset($_POST["username"]) ? htmlspecialchars($_POST["username"]) : '';

	$arr_name = ['nibuguai','alanlee','alanlee97'];
	if(in_array($name,$arr_name)){
		echo '<span style="color:red">用户名已存在</span>';
	}else{
		echo '<span style="color:green">用户名可用</span>';
	}
?>