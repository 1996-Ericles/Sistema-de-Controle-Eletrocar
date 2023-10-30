<html>
<head>
	<title>Cadastro realizado com sucesso!</title>

</head>
<body>
    
<a href="index.html">
  <img src="images/home.png" alt="HTML tutorial" width="-30px" style="width:40px;height:40px;border:0">
</a>

<a href="cadastroprodserv.php">
  <img src="images/novocadastro.png" alt="HTML tutorial" width="-30px" style="width:40px;height:40px;border:0">
</a>

     
    <br><br><br><br><br><br>
<center> 

<?php

require_once('conexao.php');

//RECEBENDO DADOS DO FORMULARIO
//atribuições dos campos do formulario para a variavel 
$nome_prodserv= $_POST ['nome_prodserv']; //atrib. "nome"
$preco= $_POST ['preco']; 			        //atrib. "preço"

//inserção dos dados no banco de dados na tabela indicada acima 
$query = "INSERT INTO produtos_servicos ( nome_prodserv, preco) VALUES ('$nome_prodserv','$preco')";

mysql_query ($query) or die(mysql_errno());
echo "Seu cadastro foi realizado com sucesso!";

?>
    
    </center>
</body>
</html>