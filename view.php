<!DOCTYPE html>
<html>
<head>
	<title>Calculadora</title>
</head>
<body>
	<center>
			
	</center> <br><br>
<?php 

	function soma($a, $b){
		return $a + $b;
	};

	function menos($a, $b){
		return $a - $b;
	};

	function dividir($a, $b){
		return $a / $b;
	};

	function mutiplicar($a, $b){
		return $a * $b;
	};


	$a = $b = $resultado = 0;

	$a = $_POST['valor1'];
	$b = $_POST['valor2'];
	$oper = $_POST['oper'];

	if ($oper == "+") {
		$resultado = soma($a,$b);
		
	} elseif ($oper == "-") {
		$resultado = menos($a,$b);
	} elseif ($oper == "*") {
		$resultado = mutiplicar($a,$b);
	} else{
		$resultado = dividir($a,$b);
	}

 ?>


<center>
	<form action="" method="post">	

	<h3 for="oper">Escolha uma ação para realizar</h3>

	<select name="oper" id="oper">
			<option value="+">Soma</option >
			<option value="-">Diminuir</option>
			<option value="*">Multiplicar</option>
			<option value="/">Dividir</option>
	</select>	

	<label>Digite um numero </label>
	<input type="number" name="valor1" required>

	<label>Digite outro numero </label>
	<input type="number" name="valor2" required>

	<BUTTON type='submit'>ok</BUTTON>
	<label>Resultado = </label>
	<input type="text" value=" <?php print $resultado ?>">

</form>
</center>

</body>
</html>