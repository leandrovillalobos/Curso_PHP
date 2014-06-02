<?php

	function suma ($num1, $num2) {
		return $result = $_GET['num1'] + $_GET['num2'];
	}

	function resta ($num1, $num2) {
		return $result = $_GET['num1'] - $_GET['num2'];
	}
	function mult ($num1, $num2) {
		return $result = $_GET['num1'] * $_GET['num2'];
	}

	function div ($num1, $num2) {
		return $result = $_GET['num1'] / $_GET['num2'];
	}

	function mod ($num1, $num2) {
		return $result = $_GET['num1'] % $_GET['num2'];
	}
	

	if($_GET['operacion'] == "suma") {
	 	$result = suma ($_GET['num1'], $_GET['num2']);
	 	echo $result;
	 }

	else if($_GET['operacion'] == "rest") {
		$result = resta ($_GET['num1'], $_GET['num2']);
	 	echo $result;
	 }

	else if($_GET['operacion'] == "mult") {
		$result = mult ($_GET['num1'], $_GET['num2']);
	 	echo $result;
	 }

	else if($_GET['operacion'] == "div") {
		$result = div ($_GET['num1'], $_GET['num2']);
	 	echo $result;
	 }
	else if($_GET['operacion'] == "mod") {
		$result = mod ($_GET['num1'], $_GET['num2']);
	 	echo $result;
	 }
?>
