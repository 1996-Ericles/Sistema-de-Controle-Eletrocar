<html>
<head>
	<title>Cadastro realizado com sucesso!</title>

</head>
<body>

<a href="index.html">
  <img src="images/home.png" alt="HTML tutorial" width="-30px" style="width:40px;height:40px;border:0">
</a>

<a href="cadastrovendedor.php">
  <img src="images/novocadastro.png" alt="HTML tutorial" width="-30px" style="width:40px;height:40px;border:0">
</a>

     
    <br><br><br><br><br><br>
<center> 
    
<?php

require_once('conexao.php');

//RECEBENDO DADOS DO FORMULARIO
//atribuições dos campos do formulario para a variavel 
$nome_vendedor= $_POST ['nome_vendedor']; 		//atrib. "nome"

//inserção dos dados no banco de dados na tabela indicada acima 
$query = "INSERT INTO vendedor ( nome_vendedor) VALUES ('$nome_vendedor')";

mysql_query ($query) or die(mysql_errno());
echo "Seu cadastro foi realizado com sucesso!";

?>
    </center>
</body>
</html>