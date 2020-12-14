<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Урок 7</title>
</head>
<body>
	<?php 
		//Логический тип
		$bool = true;
		$bool = false;
		echo $bool;
	?> 
	<?php 
		//Строки
		$var = 5;
		// echo  "Hello, World! - $var";
		echo  "Hello, World! {$var}3"; // вывод 53 без пробел
		//  ``  - в этих ковычках передаются команды опеционной системы
		//echo `dir`; //показывает текщий каталог
	?>
</body>
</html>