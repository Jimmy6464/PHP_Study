<?php
	/*
	数据类型
	标量类型：整型(int),浮点型(float),字符串型(string),布尔型(boolean)
	复合类型：数组(array),对象(object)
	其它类型：资源(resource) NULL
	*/
	/*
	echo "<h1>数据类型</h1>";
	echo "整型(int)<br>";
	$number = 100;
	var_dump($number);
	echo "浮点型(float)<br>";
	$num = 10.50;
	var_dump($num);
	echo "字符串型(string)<br>";
	$string = "jimmy is 'so' handsome，num:{$num}";//能正常解释，\n\r\t等转义符号,最重要可以读变量值需加{}
	$string2 = 'jimmy is \'so\' handsome';//'\'转义符号，单引号执行效率优于双引号
	$string3 = 'haha'.$string2.'haha';
	var_dump($string);
	var_dump($string2);
	echo "<br>".$string3;
*/
	$nameN = "Jimmy";
	$newOne = <<<Name
	<html>
		<body>
			<h1>Testing</h1>
			<p id="demo"></p>
			$nameN;
			<script>
			function myFunction(){
				document.getElementById("demo").innerHTML = "Use JavaScript and php";
			}
			myFunction();
			</script>
		</body>
	</html>
Name;
	echo $newOne;

?>