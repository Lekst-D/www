<?php
define('DB_HOST','localhost');
define('DB_LOGIN','root');
define('DB_PASSWORD','password');
define('DB_NAME','gbook');
$link=mysqli_connect(DB_HOST,DB_LOGIN, DB_PASSWORD, DB_NAME);
function clearStr($data){
global $link;
return mysqli_real_escape_string($link,trim(strip_tags($data)));
}
if($_SERVER['REQUEST_METHOD']=='POST'){
$name = clearStr($_POST['name']);
$email = clearStr($_POST['email']);
$msg = clearStr($_POST['msg']);
$sql = "INSERT INTO msgs(name, email, msg) VALUES('$name','$email','$msg');";
mysqli_query($link,$sql) or die(mysqli_error($link));
header('Location:'.$_SERVER['REQUEST_URI']);
exit;
}

if(isset($_GET['del'])){
	$del=abs((int)$_GET['del']);
	if($del){
	$sql="DELETE FROM msgs WHERE id=$del;";
	mysqli_query($link,$sql) or die(mysqli_error($link));
	header('Location:'.$_SERVER['PHP_SELF']);
	exit;
	}
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Контакты</title>
		<meta charset="utf-8" >
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>
	<body>

			<!-- Верхняя часть страницы -->
			<!-- Верхняя часть страницы -->
			<!-- Заголовок -->
			<!-- Заголовок -->
			<!-- Область основного контента -->
			<h3>Адрес</h3>
			<p></p>
			<h3>Задайте вопрос</h3>
			<form action='' method='post'>
				<label>Тема письма: </label><br />
				<input name='subject' type='text' size="50"/><br />
				<label>E-mail:</label><br />
				<input type="text" name="email" /><br />
				<label>Содержание: </label><br />
				<textarea name='body' cols="50" rows="10"></textarea><br /><br />
				<input type='submit' value='Отправить' />
			</form>	
			<!-- Область основного контента -->
			<!-- Меню -->
			<!-- Меню -->
			<!-- Нижняя часть страницы -->
			<!-- Нижняя часть страницы -->
		</div>
	</body>
</html>