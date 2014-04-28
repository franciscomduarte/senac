
<!DOCTYPE html>
<html lang="en">

	<?php include 'layout/head.php';?>

 	<body>

    <div class="container">

	<?php include 'layout/menu.php';	?>
      
	<fieldset>
	
	
	<legend class="bg-primary"> # Cadastro de Uniades #</legend>
	
		<div class="input-group input-group-lg">
		  Nome:<input type="text" class="form-control" placeholder="nome">
		</div>
		<div class="input-group input-group-lg">
		  Descrição:<input type="text" class="form-control" placeholder="descricao">
		</div>
		
		<div class="input-group input-group-lg">
		  CEP:<input type="text" class="form-control" placeholder="cep">
		</div>
		
		<div class="input-group input-group-lg">
		  Logradouro:<input type="text" class="form-control" placeholder="logradouro">
		</div>
		
		<div class="input-group input-group-lg">
		  Complemento:<input type="text" class="form-control" placeholder="complemento">
		</div>
		
		 <p style="margin-top:30px"><a class="btn btn-primary btn-lg" role="button" href="unidades.php">Salvar</a></p>
	
	</fieldset>
	
	<?php include 'layout/rodape.php';?>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>

