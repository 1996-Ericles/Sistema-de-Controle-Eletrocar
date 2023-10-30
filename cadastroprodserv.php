<HTML>
<HEAD>
<TITLE>CADASTRO PRODUTOS/SERVIÇOS</TITLE>
<!--<link rel="stylesheet" type="text/css" href="CSScadastro.css">-->
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css" rel="stylesheet">

form{
	margin: 40px 20px 1px 300px;
	color: black;
}
h2 {   
	margin: 80px 150px 10px 100px;
	color: black;
    }
button{
	margin:20px 500px 300px 100px;	
}
select{
	color: black;
}
</style>
</HEAD>
<BODY>
<center>
 <hn><h2>Cadastro de Produtos e Serviços</h2></hn> 
    <form class="form-horizontal" action="insereprodserv.php" method="post" >

		<div class="form-group">
			<label class="control-label col-sm-2" for="nome">Produto/Serviço: 
			</label>			
			<div class="col-sm-3">
				<input type="text" name="nome_prodserv" class="form-control" id="nome_prodserv">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="preco">Preço: 
			</label>			
			<div class="col-sm-3">
				<input type="text" name="preco" class="form-control" id="preco">
			</div>
      
            
		<button type="submit" class="btn btn-primary">Enviar</button>
  
    </FORM>
</BODY>
</HTML>