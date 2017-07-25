<?php
/**
 * Created by PhpStorm.
 * User: Andrei
 * Date: 25.07.2017
 * Time: 16:55
 */
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
	
}
$_GET['result'] = $result;
echo $result;
die;

