<?php
	/*
		ת����������
		1.����ת�����ı���ֵ
		2.ǿ��ת�������ı�ԭ���������Ǹ���һ���µĽ��и�ֵ
		3.settype()������ԭ����
		4.�����ת��������intval() floatval() strval() boolval()��,��ǿתԭ��һ����ֻ��Ա�������int, float,string,bool
	*/
	$a = 100;
	$b = (string)$a;
	echo "b:".var_dump($b);
	echo "<br>a:".var_dump($a);

	$str = "Jimmy 587";
	$str = (int)$str;
	$str2 = "78 jimm";
	$str2 = (float)$str2;
	$str3 = (array)$str2;//ֻ��ȡ���ֿ�ͷ����Ϊ0
	$str4 = (array)$str;
	$str5 = intval($str2);
	echo "<br><p>ת������</p>";
	echo var_dump($str);//ת�����ͣ����0
	echo var_dump($str2);//ת�����ͣ����78
	echo var_dump($str3);
	echo var_dump($str4);
	echo var_dump($str5);
	echo "<br>testing<br>";

	class user{};
	$use1 = new user();
	var_dump($use1);
	//var_dump(strval($use1));//������

	/*
	$_GET[] $_POST[] $_REQUEST[]
	*/

?>
<html>
	<head>
		<title>�ύ����ϰ</title>
	</head>
	<body>
		<form action='lesson7_1.php' method='post'>
			�������:<input type="text" name="uname"/><br/>
			�������:<input type="text" name="age"/><br/>
			��ĵ绰:<input type="text" name="tel"/><br/>
			��ĵ�ַ:<input type="text" name="address"/><br/>
			���QQ��<input type="text" name="uname"/><br/>
			�������ۣ�<br/>
			<textarea rows=10 cols=30 name="selfcomment"></textarea><br/>
			<input type="submit" value="�ύ��"/>
			<input type="reset" value="����"/>
		</form>
	</body>
</html>