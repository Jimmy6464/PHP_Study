<?php
	/*
	��������
	�������ͣ�����(int),������(float),�ַ�����(string),������(boolean)
	�������ͣ�����(array),����(object)
	�������ͣ���Դ(resource) NULL
	*/
	/*
	echo "<h1>��������</h1>";
	echo "����(int)<br>";
	$number = 100;
	var_dump($number);
	echo "������(float)<br>";
	$num = 10.50;
	var_dump($num);
	echo "�ַ�����(string)<br>";
	$string = "jimmy is 'so' handsome��num:{$num}";//���������ͣ�\n\r\t��ת�����,����Ҫ���Զ�����ֵ���{}
	$string2 = 'jimmy is \'so\' handsome';//'\'ת����ţ�������ִ��Ч������˫����
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