<html>
	<head>
		<title>Aumento de salario</title>
	</head>
	<body>
<pre>
(1) o valor do salário atual do funcionário;
(2) o tempo de serviço deste funcionário na empresa (nro. de anos de trabalho na empresa).
tabelas abaixo para calcular o salário reajustado.

R$  500  -  25%
R$ 1000  -  20%
R$ 1500  -  15%
R$ 2000  -  10%
R$ 2000+ -  0%

-1  -  0%
1 ate 3  -  100
4 ate 6  -  200
7 ate 10 -  300
+10  -  500
</pre><p>&nbsp;</p>
		<form method="post" action="#">
			<label>Salario atual: </label>
			<input type="text"  name="V1" /><br />

			<label>Tempo de servico: </label>
			<input type="text"  name="V2" /><br />

			<!--label>Preco: </label>
			<input type="text"  name="V3" /><br /-->
			<input type="submit" value="OK" />
		</form>

		<?php
		if($_POST["V1"]!="" and $_POST["V2"]!=""){
			#echo "all ok";
			$salario = $_POST["V1"];
			$tempo = $_POST["V2"];
			$msg = "";

			if($salario<=500){
				$salario += ($salario / 100) * 25;
			} else if ($salario <= 1000){
				$salario += ($salario / 100) * 25;
			} else if ($salario <= 1500){
				$salario += ($salario / 100) * 15;
			} else if ($salario <= 2000){
				$salario += ($salario / 100) * 10;
			} else {
				$msg = "<b>Salario nao alterado. Esta acima de 2k. </b>";
			}

			if ($tempo>=10){
				$salario += 500;
			} else if ($tempo>=7) {
				$salario += 300;
			} else if ($tempo>=4) {
				$salario += 200;
			} else if ($tempo>=1) {
				$salario += 100;
			} else {
				$msg .= "<br />Tempo de casa nao compativel com bonus salarial.";
			}

			echo "Salario atual R$ " . $salario;
			if($msg == ""){
				echo "<br />MSG: " . $msg;
			}
			
			#echo "<hr>";
			#var_dump($lancheArr);
			#echo "<hr>";
			#var_dump($bebidaArr);
			echo "<hr>";

		}else{
			echo "Existem campos vazios.";
		}
		?>
	</body>
</html>