
<!DOCTYPE html>
<html lang="en">

	<?php include 'layout/head.php';?>

  	<body>

    <div class="container">

	<?php include 'layout/menu.php';	?>
      
	<fieldset>
	
	
	<legend class="bg-primary"> # Cadastro de Evento #</legend>

		<div class="input-group input-group-lg">
		  Status:<select class="form-control">
		 		<option>---</option>
		  		<option>Previsto</option>
		  		<option>Em execução</option>
		  		<option>Concluído</option>
		  		</select>
		</div>
		<div class="input-group input-group-lg">
		  Nome:<input type="text" class="form-control" placeholder="nome">
		</div>
		<div class="input-group input-group-lg">
		  Início:<input type="date" class="form-control" placeholder="data"> 
		</div>
		<div class="input-group input-group-lg">
		  Término:<input type="date" class="form-control" placeholder="data"> 
		</div>
		<div class="input-group input-group-lg">
		  Programação:<textarea class="form-control" placeholder="programacao" cols="100"></textarea>
		</div>
		<div class="input-group input-group-lg">
		  Professor:<select class="form-control">
		 		<option>---</option>
		  		<option>Francisco Molina</option>
		  		<option>José da Silva</option>
		  		<option>Maria da Penha</option>
		  		</select>
		</div>
		
		 <p style="margin-top:30px"><a class="btn btn-primary btn-lg" role="button" href="eventos.php">Salvar</a></p>
	</fieldset>
	
	<?php include 'layout/rodape.php';?>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>
