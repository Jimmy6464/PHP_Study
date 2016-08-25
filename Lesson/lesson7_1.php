<?php
	$uname = empty($_POST['uname'])?"没有填写内容":$_POST['uname'];
	$age = empty($_POST['age'])?"没有填写内容":$_POST['age'];
	$tel = empty($_POST['tel'])?"没有填写内容":$_POST['tel'];
	$address = empty($_POST['address'])?"没有填写内容":$_POST['address'];
	$comment = empty($_POST['selfcomment'])?"没有填写内容":$_POST['selfcomment'];
	echo "姓名:{$uname},<br>年龄：{$age},<br>电话：{$tel},<br>地址：{$address}<br>自我评价：{$comment}";

?>