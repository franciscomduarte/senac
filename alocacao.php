
<!DOCTYPE html>
<html lang="en">

	<?php include 'layout/head.php';?>	

  	<body>

    <div class="container">
	
	<?php include 'layout/menu.php';	?>
      
	<fieldset>
	
	
	<legend class="bg-primary"> # Verificar disponibilidade de Professores #</legend>

	<form>
	  <fieldset>
	    <div class="form-group">
	      <label for="disabledTextInput">Início do Evento</label>
	      <input type="date" id="disabledTextInput" class="form-control" placeholder="Disabled input">
	    </div>
	    <div class="form-group">
	      <label for="disabledTextInput">Final do Evento</label>
	      <input type="date" id="disabledTextInput" class="form-control" placeholder="Disabled input">
	    </div>
	    <div class="form-group">
	      <label for="disabledSelect">Eixo Tecnológico</label>
	      <select id="disabledSelect" class="form-control">
	      	<option>Selecione o Eixo</option>
	        <option>Gestão de Negócio</option>
	        <option>Informação e Comunicação</option>
	      </select>
	    </div>
	    <p style="margin-top:30px"><a class="btn btn-primary btn-lg" role="button" href="detalhaAlocacao.php">Pesquisar</a></p>
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

