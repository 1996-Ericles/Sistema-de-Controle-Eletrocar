<html>
<head>
	<title>Cadastro realizado com sucesso!</title>


</head>
  
<body>

<a href="index.html">
  <img src="images/home.png" alt="HTML tutorial" width="-30px" style="width:40px;height:40px;border:0">
</a>

<a href="cadastrocliente.php">
  <img src="images/novocadastro.png" alt="HTML tutorial" width="-30px" style="width:40px;height:40px;border:0">
</a>

     
    <br><br><br><br><br><br>
<center>    
<?php
 
require_once('conexao.php');

//RECEBENDO DADOS DO FORMULARIO
//atribuições dos campos do formulario para a variavel 
$nome_cliente= $_POST ['nome_cliente']; //atrib. "nome"
$cpf= $_POST ['cpf']; 			        //atrib. "cpf"
$veiculo= $_POST ['veiculo']; 		    //atrib. "veiculo"
$placa= $_POST ['placa']; 			    //atrib. "placa"

//inserção dos dados no banco de dados na tabela indicada acima 
$query = "INSERT INTO cliente ( nome_cliente, cpf, veiculo, placa) VALUES ('$nome_cliente','$cpf','$veiculo','$placa')";

mysql_query ($query) or die(mysql_errno());
echo "Seu cadastro foi realizado com sucesso!";

?>
    </center>
</body>
</html>