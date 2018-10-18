<html !DOCTYPE>
<head>
	<title>Soma de 2 inteiros</title>
	<meta charset="UTF-8">
</head>
<body>

<!-- Desafio Soma PHPWomen - RJ -->
<form action="solucao.php" method="POST">
	<p>N&uacute;mero1 <input type="text" name="numero1" /></p>
	<p>N&uacute;mero2 <input type="text" name="numero2" /></p>
	<input type="submit" value="Soma" />
</form>

<?php 
$numero1 = isset($_POST['numero1']) ? (int) $_POST['numero1'] : '';
$numero2 = isset($_POST['numero2']) ? (int) $_POST['numero2'] : '';
if ($numero1 or $numero2) {
	echo 'X = ' . ($numero1 + $numero2);
} else {
	echo '';
}
?>
</body>
</html>