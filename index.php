
<html>
	<title> MEU CEP </title>
	<body> 
		<form action="index.php" method="post"> <!-- 1: form estava "idex.php", o correto é "index.php" -->
		<label> Insira o CEP: </label>
		<input type="text" name="cep">
		<input type="submit" value="Enviar">
	</body>
</html>

<?php

if(!empty($_POST['cep'])){
	
	$cep = $_POST['cep'];

	$address = (get_address($cep));//2: variável errada ($cp), a correta é $cep

	echo "<br><br>CEP Informado: $cep<br>";
	echo "Rua: $address->logradouro<br>"; //3: adress escrito errado, com apenas 1 s //4: logradouro escrito errado, faltando letra o
	echo "Bairro: $address->bairro<br>";
	echo "Estado: $address->uf<br>"; //5: addres escrito errado, com apenas 1 d
}

function get_address($cep){
	
	
	$cep = preg_replace("/[^0-9]/", "", $cep);
	$url = "http://viacep.com.br/ws/$cep/xml/";//6: faltando uma barra separando ws do cep

	$xml = simplexml_load_file($url);
	return $xml;
}

?>