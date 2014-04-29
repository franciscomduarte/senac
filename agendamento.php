
<!DOCTYPE html>
<html lang="en">

	<?php include 'layout/head.php';?>	

  	<body>

    <div class="container">
	
	<?php include 'layout/menu.php';	?>
      
	<fieldset>
	
	
	<legend class="bg-primary"> # Programar Curso #</legend>

	
	<div class="form-group">
		<label for="disabledSelect">Curso</label>
		<select id="disabledSelect" class="form-control">
 			<option>Selecione o Curso</option>
			<option>Cabeleiro</option>
			<option>Copeiro Hospitalar</option>
			<option>Corte e Escova</option>
			<option>Depilador</option>
			<option>Design de Sobracelhas</option>
			<option>Especialização Técnica em Enfermagem do Trabalho</option>
			<option>Especialização Técnica em Instrumentação Cirúrgica</option>
			<option>Manicure e Pedicure</option>
      </select>
	</div>
	
	<div class="form-group">
		<label for="disabledSelect">CEP</label>
		<select id="disabledSelect" class="form-control">
 			<option>Selecione o CEP</option>
			<option>SEDE</option>
			<option>903 Sul</option>
			<option>Sobradinho</option>
			<option>Gama</option>
			<option>Jessé Freire</option>
			<option>Taguatinga</option>
			<option>Ceilândia</option>
			<option>Ações Movéis</option>
			<option>Fac Senac</option>
			<option>UIC</option>
			<option>NRE</option>
			<option>EAD</option>
      </select>
	</div>
	
	<div class="form-group">
		<label for="disabledSelect">Turno</label>
		<select id="disabledSelect" class="form-control">
 			<option>Selecione o Turno</option>
			<option>Manhã</option>
			<option>Tarde</option>
			<option>Noite</option>
      </select>
	</div>
	
	<div class="form-group">
	      <label for="disabledTextInput">Início do Curso</label>
	      <input type="date" id="disabledTextInput" class="form-control" placeholder="Disabled input">
	</div>
	<div class="form-group">
	      <label for="disabledTextInput">Final do Curso</label>
	      <input type="date" id="disabledTextInput" class="form-control" placeholder="Disabled input">
	</div>
	
	<fieldset>
		<legend class="bg-primary"> # Dias da Semana #</legend>
		
		
		<label class="checkbox-inline">
		  <input type="checkbox" id="inlineCheckbox1" value="option1"> Segunda
		</label>
		<label class="checkbox-inline">
		  <input type="checkbox" id="inlineCheckbox2" value="option2"> Terça
		</label>
		<label class="checkbox-inline">
		  <input type="checkbox" id="inlineCheckbox3" value="option3"> Quarta
		</label>
		
		<label class="checkbox-inline">
		  <input type="checkbox" id="inlineCheckbox1" value="option1"> Quinta
		</label>
		<label class="checkbox-inline">
		  <input type="checkbox" id="inlineCheckbox2" value="option2"> Sexta
		</label>
		<label class="checkbox-inline">
		  <input type="checkbox" id="inlineCheckbox3" value="option3"> Sábado
		</label>
		
		<label class="checkbox-inline">
		  <input type="checkbox" id="inlineCheckbox3" value="option3"> Domingo
		</label>
		
			
	</fieldset>
	
	<form>
	  <fieldset>


	    <p style="margin-top:30px"><a class="btn btn-primary btn-lg" role="button" href="confirmarAgendamento.php">Verificar Professores Disponíveis</a></p>
	  </fieldset>
	</form>

<br/>
</fieldset>



      <!-- Site footer -->
      <div class="footer">
        <p>&copy; Company 2014</p>
      </div>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>

