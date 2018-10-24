<html !DOCTYPE>
<head>
	<title>Soma de 2 inteiros com POO</title>
	<meta charset="UTF-8">
</head>
<body>

<!-- Desafio Soma PHPWomen - RJ -->
<!-- Adicionando Orientação a Objetos -->
<form action="solucao2.php" method="POST">
	<p>N&uacute;mero1 <input type="text" name="num1" /></p>
	<p>N&uacute;mero2 <input type="text" name="num2" /></p>
	<input type="submit" value="Soma" />
</form>

<?php
class Operando
{
	private $numero1;
	private $numero2;
	private $total;

	function __construct($dados) {
		$numero1 = isset($dados['num1']) && !empty('num1') ? (int) $dados['num1'] : '';
		$numero2 = isset($dados['num2']) && !empty('num2') ? (int) $dados['num2'] : '';
	}

	public function set_numero1($valor){
		$this->$numero1 = $valor;
	}

	public function set_numero2($valor){
		$this->$numero2 = $valor;
	}

	public function get_total(){
		return $this->$total;
	}

	public function soma(){
			$total = $this->set_numero1($numero1) + $this->set_numero2($numero2);
			return $total;
	}

	public function imprime(){
		echo 'X = ' . $this->get_total();
	}
}

if($_SERVER['REQUEST_METHOD'] == 'POST') {
	$obj = new Operando($_POST);
	$obj->soma();
	$obj->imprime();
}
?>
</body>
</html>