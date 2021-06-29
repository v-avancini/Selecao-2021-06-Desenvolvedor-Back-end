<html>
<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> MEU CEP </title>
    <!-- Bootstrap CSS via CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Incluindo CSS autoral-->
    <link rel="stylesheet" href="estilo.css">
    
</head>   
	<body> 
        <div id="cep">
            <form action="index.php" method="post">
                <label> Insira o CEP:  
                    <input type="text" name="cep">             
                    <input type="submit" value="Enviar">
                </label>
        </div>            
        
        <!-- JavaScript -->
        <!-- jQuery, Popper.js e Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
            
	</body>
</html>

<?php
error_reporting(1);//Definindo nível de apresentação de erro
require_once 'Address.php';//Incluindo arquivo Address  
if(!empty($_POST['cep'])){
	
	$cep = $_POST['cep'];    
    $address = new Address();//Instanciando objeto da classe Address    
	$aux = $address->get_address($cep);//Variável aux recebe referência do objeto
    
    echo "<label><br><br>CEP Informado: $cep<br>";
	echo "Rua: $aux->logradouro<br>";
	echo "Bairro: $aux->bairro<br>";
	echo "Estado: $aux->uf<br></label>";    	 
}

?>