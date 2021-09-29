<?php
/* Здесь проверяется существование переменных */
if (isset($_POST['cpu'])) {$cpu = $_POST['cpu'];}
if (isset($_POST['motherboard'])) {$motherboard = $_POST['motherboard'];}
if (isset($_POST['memory'])) {$memory = $_POST['memory'];}
if (isset($_POST['case'])) {$case = $_POST['case'];}
if (isset($_POST['powersupply'])) {$powersupply = $_POST['powersupply'];}
if (isset($_POST['ssd'])) {$ssd = $_POST['ssd'];}
if (isset($_POST['cooler'])) {$cooler = $_POST['cooler'];}
if (isset($_POST['gpu'])) {$gpu = $_POST['gpu'];}
 
/* Сюда впишите свою эл. почту */
$myaddres  = "vladshevon@gmail.com"; // кому отправляем
 
/* А здесь прописывается текст сообщения, \n - перенос строки */
$mes = "Тема: Комплектующие ПК";
 
/* А эта функция как раз занимается отправкой письма на указанный вами email */
$sub='Данные с формы'; //сабж
$email='Данные от'; // от кого
$send = mail ($myaddres,$sub,$mes,"Content-type:text/plain; charset = utf-8\r\nFrom:$email");
 
ini_set('short_open_tag', 'On');
header('Refresh: 3; URL=index.html');

ini_set('display_errors','On');
error_reporting('E_ALL');
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="refresh" content="3; url=index.html">
<title>Данные записаны!</title>
<meta name="generator">
<script type="text/javascript">
setTimeout('location.replace("/index.html")', 3000);
/*Изменить текущий адрес страницы через 3 секунды (3000 миллисекунд)*/
</script> 
</head>
<body>
<h1>Данные записаны!</h1>
</body>
</html>