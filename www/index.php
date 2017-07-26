<?php
/**
 * Created by PhpStorm.
 * User: Andrei
 * Date: 24.07.2017
 * Time: 20:41
 */
/*
 1. Напишите программу-калькулятор
  - Форма для ввода двух чисел, выбора знака операции и кнопка "равно"
  - Данные пусть передаются методом GET из формы (да, можно и так!) на скрипт, который их примет и выведет выражение и его результат
  - * Попробуйте улучшить программу. Пусть данные отправляются на ту же страницу на PHP, введенные числа останутся в input-ах, а результат появится после кнопки "равно"
2. Создайте примитивную фотогалерею из двух страниц
  - Пусть на главной странице галереи выводятся 3-4 изображения
  - Каждое из них пусть будет ссылкой вида /image.php?id=42, где 42 - условный номер изображения
  - На странице image.php вы по номеру понимаете, какое изображение вывести в браузер и выводите его. Я ожидаю, что для этого пункта программы вы создатите массив вида [1 => 'cat.jpg', 2=>'dog.jpg', ... ], однако вы можете предложить и другое решение

 * */
//if()
?>

<?php
$operator = $_GET['op'];
$numberOne = $_GET['n1'];
$numberTwo = $_GET['n2'];
$result = 0;
switch ($operator){
	case '+':{
		$result = $numberOne + $numberTwo;
		break;
	}case '-':{
	$result = $numberOne - $numberTwo;
	break;
}case '*':{
	$result = $numberOne * $numberTwo;
	break;
}case '/':{
	if($numberTwo == 0){
		$result = null;
	}else{
		$result = $numberOne / $numberTwo;
	}
	break;
}

//    die;
//	var_dump($_GET['result']);
//	var_dump($result);
	
}
$_GET['result'] = $result;
echo $result;
var_dump($_GET);
?>
<html>
<head>
	<title> Test</title>
</head>
<body>
<h1>Calculator</h1>
<form action="index.php" method="get">
    <label ><input type="number" name="n1" value="<?=$_GET['n1']?>"></label>
    <label ><select name="op">
        <option name="plus" value="+">+</option>
        <option name="minus" value="-">-</option>
        <option name="inmultire" value="*">*</option>
        <option name="impartire" value="/">/</option>
    </select></label>
    <label ><input type="number" name="n2" value="<?=$_GET['n2']?>"></label>
    <button type="submit"> = </button>
    <br>
        <label ><input type="number" name="result" value="<?=$result?>"></label>
</form>
<h2>Fotogalerie</h2>
<div>
    <img src="img/1.jpg">
    <img src="img/2.jpg">
    <img src="img/3.jpg">
    <img src="img/4.jpg">
</div>

</body>
</html>