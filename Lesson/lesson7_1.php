<?php
	$uname = empty($_POST['uname'])?"û����д����":$_POST['uname'];
	$age = empty($_POST['age'])?"û����д����":$_POST['age'];
	$tel = empty($_POST['tel'])?"û����д����":$_POST['tel'];
	$address = empty($_POST['address'])?"û����д����":$_POST['address'];
	$comment = empty($_POST['selfcomment'])?"û����д����":$_POST['selfcomment'];
	echo "����:{$uname},<br>���䣺{$age},<br>�绰��{$tel},<br>��ַ��{$address}<br>�������ۣ�{$comment}";

?>