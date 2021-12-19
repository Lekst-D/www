<?php
include 'cookie.inc.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<title><?=$title?></title>
		<meta charset="utf-8" >
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>
	<body>
		<div id="header">
			<!-- Верхняя часть страницы -->
			<?php 
			
			echo "Кол-во посетителей: $visit_counter <br>"; 
			echo "Ваш последний визит: $last_visit";
			?>
			<span class="slogan">Знания - сила</span>
			<?php
			
				include 'top.inc.php';
				$title = 'Наш сайт';
				$header = "$welcome, Гость!";
				$id = strtolower(strip_tags(trim($_GET['id'])));

				switch($id)
{
    case 'about': 
        $title='О сайте';
		$header=', О нашем сайте';
        break;
    case 'contact': 
        $title='Контакты';
		$header=', Обратная связь';
        break;
    case 'table': 
        $title='Таблица умножения';
		$header=', Таблица умножения';
        break;
	case 'question1_10': 
		$title='Задания с 1 по 10';
		$header=', Задания с 1 по 10';
		break;
}


			?>
			<!-- Верхняя часть страницы -->
		</div>

		<div id="content">
			<!-- Заголовок -->
			<blockquote>
			<?php
			$timezone = 'Asia/Chita';
			date_default_timezone_set($timezone);
			$hour = (int)strftime('%H');
			$min = (int)strftime('%M');
			$welcome = '';

			if($hour>=0 and $hour<6)
			$welcome="Доброй ночи";

			if($hour>=6 and $hour<12)
			$welcome="Доброй утро";

			if($hour>=12 and $hour<18)
			$welcome="Доброй день";

			if($hour>=18 and $hour<23)
			$welcome="Доброй вечер";
			?>
			</blockquote>
			
			<h1><?php echo " $welcome";?><?= $header?></h1>
			<!-- Заголовок -->
			<!-- Область основного контента -->
			<?php
			switch($id){case 'about': include 'about.php'; 
				break;
				case 'contact': include 'contact.php'; 
				break;
				case 'table': include 'table.php'; 
				break;
				case 'question1_10': include 'question1_10.php'; 
				break;
				default: include 'index.inc.php';}
		    ?>
			<!-- Область основного контента -->
		</div>
		<div id="nav">
			<!-- Навигация -->
			<h2>Навигация по сайту</h2>
			<!-- Меню -->
			<ul>
			<?php
				include 'data.inc.php';
			?>
			</ul>
			<!-- Меню -->
			<!-- Навигация -->
		</div>
		<div id="footer">
			<!-- Нижняя часть страницы -->
			<?php
				include 'bottom.inc.php';
			?>
			<?php echo COPYRIGHT?>
			<!-- Нижняя часть страницы -->
		</div>
	</body>
</html>