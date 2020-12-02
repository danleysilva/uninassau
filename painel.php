<?php
session_start();
include('verifica_login.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Moeda</title>
    <link href="css/inicial.css" rel="stylesheet" />
</head>
<body background="fundo.jpg">
<h2>Olá, <?php echo $_SESSION['nome'];?></h2>
<h2><a href="logout.php">Sair</a></h2>
	<div id="app" class="app">
		<div class="content-title">
			<h1>Dólar dos Estados Unidos (USD) / Real (BRL)</h1>
			
		</div>
		<div class="content-form">
			<form>
				<input type="number" min="0" step="0.01" id="input_dolar" placeholder="Digite o valor em dolar" />
				<button type="submit" class="btn-app">Converter para Real (BRL)</button>
			</form>
		</div>
		<div class="content-result">
			<p>
				R$
				<span id="result"></span>
			</p>
		</div>
		<div class="content-result">
			<p>
				
				Observação: A conversão segue as taxas de câmbio aproximadas do dia 19 de Novembro de 2020.


				<span id="result-moedas"></span>
			</p>
		</div>
	</div>
	<center><img src="dolar.jpg" alt=""></center>
	<script src="calculo.js"></script>
</body>
</html>

