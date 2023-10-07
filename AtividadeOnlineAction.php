<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Atividade Online</title>
</head>
<body>
	<div class="w3-container w3-teal">
		<?php 
			$nome = $_POST['txtNome'];
			$valor_compra = $_POST['txtValorCompra'];
			$forma_pagamento = $_POST['cmbPag'];					
			if ($forma_pagamento == "Depósito") {
				$desconto = 10;
				echo "PROMOÇÃO DE MÊS DE ANIVERSÁRIO!<br>";
			} elseif ($forma_pagamento == "Boleto") {
				$desconto = 8;
				echo "PROMOÇÃO DE MÊS DE ANIVERSÁRIO!<br>";
			} else {
				$desconto = 0;
			}			
			$valor_desconto = ($desconto/100) * $valor_compra;
			$valor_final = $valor_compra - $valor_desconto;			
			echo "$nome"."!<br>";
			echo "Valor da Compra Sem Desconto: R$ $valor_compra<br>";
			echo "Forma de Pagamento escolhida: $forma_pagamento<br>";
			echo "Desconto de: $desconto"."%<br>";
			echo "Você economizou: R$ $valor_desconto<br>";
			echo "Valor a Pagar: R$ $valor_final";
		?>
	</div>
</body>
</html>