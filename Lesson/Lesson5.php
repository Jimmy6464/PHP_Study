<?php
	/*
		������ TRUE FALSE
		Ϊ�����ͣ�
		1.FALSE 2. 0 3. 0.0 4���ַ���Ϊ�� 5.�ַ���0Ϊ��
		6.NULLΪ�� 7.������Ϊ�� 
		�������������Ϊ��
	*/
	echo "<h1>��������֮������(boolean) TRUE or FALSE</h1>";

	$a=100;
	if($a==100){
		echo $a."<br>";
	}
	
	$name = $_GET['uname'];
	if($name){
		echo "your name is ".$name;
	}else {
		echo "plz' input your name";
	}
?>
<html>
	<head></head>
	<body>
		<form action='' method=''>
			<input type="text" name="uname"><br/>
			<input type="submit" value="submit">
		</form>
	</body>
</html>

<?php
/*
	����
*/
	echo "<h1>����</h1>";
	$names = ["Jimmy","King","Sabira","Kimmy","Yimmy"];
	$i = 0;
	while(TRUE){
		echo $names[$i]."<br>";
		$i ++;
		if($i>=5){
			break;
		}
	}
	var_dump($names);
	/*
	����
	*/
	class person{
		public $age;
		function say(){
			echo "I am 10 years old";
		}
	}
	$jimmy = new person();
	$jimmy->age = 10;

	echo "property is ".$jimmy->age."<br>";
	echo $jimmy->say();
	/*
		NULL
	*/
	$newOne = "Jimmy";
	var_dump($newOne);
	//unset($newOne);//�Ƴ�����
	$newOne = NULL;
	var_dump($newOne);
?>