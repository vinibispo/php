<html>
<body>
<?php
$n1 = $_POST['num1'];
$n2 = $_POST['num2'];
$operacao = $_POST['operation'];
if ($operacao == "Somar"){
	$sum = $n1 + $n2;
	echo $sum;
} elseif ($operacao == "Multiplicar"){
	$multiply = $n1 * $n2;
	echo $multiply;
} elseif ($operacao == "Subtrair"){
	$subtract = $n1 - $n2;
	echo $subtract;
} else {
	$division = $n1 / $n2;
	echo $division;
}
?>
</body>
</html>