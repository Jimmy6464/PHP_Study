<?php
	/*
		转换变量类型
		1.自由转换，改变其值
		2.强制转换，不改变原变量，而是复制一分新的进行赋值
		3.settype()作用于原变量
		4.具体的转换函数，intval() floatval() strval() boolval()等,与强转原理一样，只针对标量类型int, float,string,bool
	*/
	$a = 100;
	$b = (string)$a;
	echo "b:".var_dump($b);
	echo "<br>a:".var_dump($a);

	$str = "Jimmy 587";
	$str = (int)$str;
	$str2 = "78 jimm";
	$str2 = (float)$str2;
	$str3 = (array)$str2;//只获取数字开头否则为0
	$str4 = (array)$str;
	$str5 = intval($str2);
	echo "<br><p>转换操作</p>";
	echo var_dump($str);//转换类型，输出0
	echo var_dump($str2);//转换类型，输出78
	echo var_dump($str3);
	echo var_dump($str4);
	echo var_dump($str5);
	echo "<br>testing<br>";

	class user{};
	$use1 = new user();
	var_dump($use1);
	//var_dump(strval($use1));//不允许

	/*
	$_GET[] $_POST[] $_REQUEST[]
	*/

?>
<html>
	<head>
		<title>提交表单练习</title>
	</head>
	<body>
		<form action='lesson7_1.php' method='post'>
			你的姓名:<input type="text" name="uname"/><br/>
			你的年龄:<input type="text" name="age"/><br/>
			你的电话:<input type="text" name="tel"/><br/>
			你的地址:<input type="text" name="address"/><br/>
			你的QQ：<input type="text" name="uname"/><br/>
			自我评价：<br/>
			<textarea rows=10 cols=30 name="selfcomment"></textarea><br/>
			<input type="submit" value="提交表单"/>
			<input type="reset" value="重置"/>
		</form>
	</body>
</html>