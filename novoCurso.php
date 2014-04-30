
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
		
		<br/>
		
		<div class="">
		  Resumo do Curso:<textarea class="form-control" rows="3"></textarea>
		</div>
		
		<div class="input-group input-group-lg">
		  Horas:<input type="text" class="form-control" placeholder="nome">
		</div>
		
		<br/>
		
		<div class="form-group">
	    	<label for="exampleInputFile">Matriz Curricular</label>
	    	<input type="file" id="exampleInputFile">
	    	<p class="help-block">Escolha a Matriz Curricular</p>
	  	</div>
	  	
	  	<div class="form-group">
	    	<label for="exampleInputFile">Plano de Curso</label>
	    	<input type="file" id="exampleInputFile">
	    	<p class="help-block">Escolha o Plano de Curso</p>
	  	</div>
	  		
		<br/>
		
		<div>
			<fieldset>
			<legend class="bg-primary"> # Disciplinas #</legend>
			
			
			<div class="well well-lg">Gestão de Négocios</div>
			
			<label class="checkbox-inline">
			  <input type="checkbox" id="inlineCheckbox1" value="option1"> Gestão de Empreendedorismo
			</label>
			<label class="checkbox-inline">
			  <input type="checkbox" id="inlineCheckbox2" value="option2"> Relações Interpessoais I
			</label>
			<label class="checkbox-inline">
			  <input type="checkbox" id="inlineCheckbox3" value="option3"> Comunicação Empresarial
			</label>
			
			<br>
			
			<label class="checkbox-inline">
			  <input type="checkbox" id="inlineCheckbox1" value="option1"> Editor de Textos
			</label>
			<label class="checkbox-inline">
			  <input type="checkbox" id="inlineCheckbox2" value="option2"> Processos de Suprimento
			</label>
			<label class="checkbox-inline">
			  <input type="checkbox" id="inlineCheckbox3" value="option3"> Aquisição de Materias
			</label>
			
			<br>
			<br>
			<br>
			
			<div class="well well-lg">Ambiente e Saúde</div>
			
						<label class="checkbox-inline">
			  <input type="checkbox" id="inlineCheckbox1" value="option1"> Estética
			</label>
			<label class="checkbox-inline">
			  <input type="checkbox" id="inlineCheckbox2" value="option2"> Fisiologia
			</label>
			<label class="checkbox-inline">
			  <input type="checkbox" id="inlineCheckbox3" value="option3"> Massoterapia
			</label>
			
			<br>
			
			<label class="checkbox-inline">
			  <input type="checkbox" id="inlineCheckbox1" value="option1"> Anatomia
			</label>
			<label class="checkbox-inline">
			  <input type="checkbox" id="inlineCheckbox2" value="option2"> Biomecânica
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
