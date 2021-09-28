<html>
<head>
<title>Форма заявки с сайта</title>
</head>
<body>
<?php
//проверяем, существуют ли переменные в массиве POST
if (isset($_POST['cpu'])) {$cpu = $_POST['cpu'];}
if (isset($_POST['motherboard'])) {$motherboard = $_POST['motherboard'];}
if (isset($_POST['memory'])) {$memory = $_POST['memory'];}
if (isset($_POST['case'])) {$case = $_POST['case'];}
if (isset($_POST['powersupply'])) {$powersupply = $_POST['powersupply'];}
if (isset($_POST['ssd'])) {$ssd = $_POST['ssd'];}
if (isset($_POST['cooler'])) {$cooler = $_POST['cooler'];}
if (isset($_POST['gpu'])) {$gpu = $_POST['gpu'];} {
 ?> <form action="send.php" method="post">
<input type="text" name="cpu" placeholder="Введите данные" required>
<input type="text" name="motherboard" placeholder="Введите данные" required>
<input type="text" name="memory" placeholder="Введите данные" required>
<input type="text" name="case" placeholder="Введите данные" required>
<input type="text" name="powersupply" placeholder="Введите данные" required>
<input type="text" name="ssd" placeholder="Введите данные" required>
<input type="text" name="cooler" placeholder="Введите данные" required>
<input type="text" name="gpu" placeholder="Введите данные" required>
<input type="submit" value="Отправить">
</form> <?php
} else {
 //показываем форму
 $cpu = $_POST['cpu'];
 $motherboard = $_POST['motherboard'];
 $memory = $_POST['memory'];
 $case = $_POST['case'];
 $powersupply = $_POST['powersupply'];
 $ssd = $_POST['ssd'];
 $cooler = $_POST['cooler'];
 $gpu = $_POST['gpu'];
 $cpu = htmlspecialchars($cpu);
 $motherboard = htmlspecialchars($motherboard);
 $memory = htmlspecialchars($memory);
 $case = htmlspecialchars($case);
 $powersupply = htmlspecialchars($powersupply);
 $ssd = htmlspecialchars($ssd);
 $cooler = htmlspecialchars($cooler);
 $gpu = htmlspecialchars($gpu);
 $cpu = urldecode($cpu);
 $motherboard = urldecode($motherboard);
 $memory = urldecode($memory);
 $case = urldecode($case);
 $powersupply = urldecode($powersupply);
 $ssd = urldecode($ssd);
 $cooler = urldecode($cooler);
 $gpu = urldecode($gpu);
 $cpu = trim($cpu);
 $motherboard = trim($motherboard);
 $memory = trim($memory);
 $case = trim($case);
 $powersupply = trim($powersupply);
 $ssd = trim($ssd);
 $cooler = trim($cooler);
 $gpu = trim($gpu);
 if (mail("vladyslav.shevchenko4@nure.ua", "Комплектующие ПК", "Процессор:".$cpu", "Материнская плата:".$motherboard", "Оперативная память:".$memory", " Корпус:".$case", "Блок питания:".$powersupply", "Дисковые накопители:".$ssd", "Система охлаждения:".$cooler", "Видеокарта:".$gpu" \r\n")){
 echo "Данные успешно отправлены";
 } else {
 echo "При отправке данных возникли ошибки";
 }
}
?>
</body>
</html>