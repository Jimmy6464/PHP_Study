<?php
	/*
		����
	*/
	$webName = "bbs.hoadf";//����
	$webName = "fdfdf";
	echo $webName;
	var_dump($webName);//"var_dump":����������ͺͱ������Ⱥ�ֵ
	/*
		�ɱ����
	*/
	$$webName = "JImmy";//�ɱ����
	echo $$webName."_____".$fdfdf;

	echo $_GET['webIp'];//�����ַ����
	echo $_POST['uName'];//����ı��������
?>
<a href="lesson2.php?webIp=jimmyNg&uName=king">����ύվ��</a>
<form action="lesson2.php" method="post">
	<input type="text" name="uName"><br/>
	<input type="submit" value="�ύ��">
</form>