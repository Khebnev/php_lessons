<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Урок 4</title>
</head>
<body>
	
	<?php
		echo "Главный скрипт <br>";
		include 'second.php'; //require и include работают примерно одинаковым образом
		//Если будет отсутствовать файл second php, в случае с include у нас будет выводиться предупреждение, а require скрипт будет польностью не рабочий.
		echo "Главный скрипт <br>";
	?>

</body>
</html>