
<!DOCTYPE html>
<html lang="en">

	<?php include 'layout/head.php';?>

  	<body>

    <div class="container">

	<?php include 'layout/menu.php';	?>
      
	<fieldset>
	
	<legend class="bg-primary"> # Cadastro de Instrutores #</legend>
	
		<div class="input-group input-group-lg">
		  Nome:<input type="text" class="form-control" placeholder="nome">
		</div>
		<div class="input-group input-group-lg">
		  Email:<input type="text" class="form-control" placeholder="email">
		</div>
		<div class="input-group input-group-lg">
		  Telefone:<input type="text" class="form-control" placeholder="telefone">
		</div>
		
		<div class="input-group input-group-lg">
		  Resumo do Currículo:<textarea class="form-control" placeholder="Resumo do Currículo" cols="50"></textarea>
		</div>
		
		<div class="form-group">
	    <label for="exampleInputFile">Foto</label>
	    <input type="file" id="exampleInputFile">
	    <p class="help-block">Escolha a foto do Instrutor</p>
	  </div>
	
			<div class="form-group">
	    <label for="exampleInputFile">Currículo</label>
	    <input type="file" id="exampleInputFile">
	    <p class="help-block">Escolha o currículo do Instrutor</p>
	  </div>

	
	<fieldset>
		<legend class="bg-primary"> # Competências #</legend>
		
		
		<label class="checkbox-inline">
		  <input type="checkbox" id="inlineCheckbox1" value="option1"> Estética
		</label>
		<label class="checkbox-inline">
		  <input type="checkbox" id="inlineCheckbox2" value="option2"> Informática Básica
		</label>
		<label class="checkbox-inline">
		  <input type="checkbox" id="inlineCheckbox3" value="option3"> Massoterapia
		</label>
		
		<br>
		
		<label class="checkbox-inline">
		  <input type="checkbox" id="inlineCheckbox1" value="option1"> Anatomia
		</label>
		<label class="checkbox-inline">
		  <input type="checkbox" id="inlineCheckbox2" value="option2"> Fisiologia
		</label>
		<label class="checkbox-inline">
		  <input type="checkbox" id="inlineCheckbox3" value="option3"> Podologia
		</label>
		
			
	</fieldset>
	
			 <p style="margin-top:30px"><a class="btn btn-primary btn-lg" role="button" href="instrutores.php">Salvar</a></p>
	
	</fieldset>
	
	<?php include 'layout/rodape.php';?>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>

