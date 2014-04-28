
<!DOCTYPE html>
<html lang="en">

	<?php include 'layout/head.php';?>
	
  	<body>

    <div class="container">
		<?php include 'layout/menu.php'; ?>
    </div>

	<fieldset>
		<legend class="bg-primary"> # Cadastro de Eixo Tecnológico #</legend>
		<div class="input-group input-group-lg">
		  Nome:<input type="text" class="form-control" placeholder="nome">
		</div>
		<div class="input-group input-group-lg">
		  Descrição:<input type="text" class="form-control" placeholder="email">
		</div>
		<p style="margin-top:30px"><a class="btn btn-primary btn-lg" role="button" href="eixos.php">Salvar</a></p>
	</fieldset>
	
	<?php include 'layout/rodape.php';?>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>

