
<!DOCTYPE html>
<html lang="en">

	<?php include 'layout/head.php';?>

  	<body>

    <div class="container">

	<?php include 'layout/menu.php';	?>
      
	<fieldset>
	
	
	<legend class="bg-primary"> # Cadastro de Curso #</legend>

		<div class="input-group input-group-lg">
		  Tipo:<select class="form-control">
		 		<option>---</option>
		  		<option>Fic</option>
		  		<option>Técnico</option>
		  		<option>Profissionalizante</option>
		  		</select>
		</div>
		
		
		<div class="input-group input-group-lg">
		  Nome:<input type="text" class="form-control" placeholder="nome">
		</div>
		
		<div class="input-group input-group-lg">
		  Eixo Tecnológico:<select class="form-control">
		 		<option>---</option>
		  		<option>Ambiente e Saúde</option>
		  		<option>Turismo, Hospitalidade e Lazer</option>
		  		<option>Produção Alimentícia</option>
		  		<option>Informação e Comunicação</option>
		  		<option>Produção Cultural e Design</option>
		  		</select>
		</div>
		
		<div class="input-group input-group-lg">
		  Horas:<input type="text" class="form-control" placeholder="nome">
		</div>
		
		<br/>
		
		<div>
			<fieldset>
			<legend class="bg-primary"> # Disciplinas #</legend>
			
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
		</div>
		
		 <p style="margin-top:30px"><a class="btn btn-primary btn-lg" role="button" href="cursos.php">Salvar</a></p>
	</fieldset>
	
	<?php include 'layout/rodape.php';?>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>
