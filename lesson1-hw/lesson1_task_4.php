<?php
/*
	Используя имеющийся HTML-шаблон, сделать так, чтобы главная страница генерировалась через PHP. Создать блок переменных в начале страницы. Сделать так, чтобы h1, title и текущий год генерировались в блоке контента из созданных переменных.
*/

	$h1 = 'my first PHP website';		//Какой-то текст, например название сайта, которое отразится на странице браузера
	$title = 'Document PHP';			//название html-страницы
	$now_year = date ('Y');				//текущая дата, как правило в подвале сайта

?>

<!DOCTYPE html>

<html >

<head>

    <meta charset="UTF-8">

    <title><?php echo $title ?></title>

</head>

<body>
	<main>
		<h1><?=$h1?></h1>
		<h3>задание 4 к первому уроку по PHP</h3>
	</main>
	<footer>
		<h5>footer my website <?=$now_year?> </h5>
	</footer>
</body>
</html>
