
<!DOCTYPE html>
<html lang="en">

	<?php include 'layout/head.php';?>

  	<body>

    <div class="container">

	<?php include 'layout/menu.php';	?>

		<div class="panel panel-default">
		  <!-- Default panel contents -->
		  <div class="panel-heading">Eixos Tecnológicos</div>
		  <div class="panel-body bg-primary">
		    <p>Listagem de Eixos Tecnológicos cadastrados no sistema</p>
		  </div>
		
		  <!-- Table -->
		<table class="table">
		        <thead>
		          <tr>
		            <th>#</th>
		            <th>Nome</th>
		            <th>Descrição</th>
		            <th>Ações</th>
		          </tr>
		        </thead>
		        <tbody>
		          <tr>
		            <td>1</td>
		            <td>Gestão de Negócio</td>
		            <td>Eixo responsável por capacitar o aluno em ...</td>
		            <td><span class="glyphicon glyphicon-remove"></span></td>
		          </tr>
		          <tr>
		            <td>2</td>
		            <td>Ambiente e Saúde</td>
		            <td>Eixo responsável por capacitar o aluno em ...</td>
		            <td><span class="glyphicon glyphicon-remove"></span></td>
		          </tr>
		          <tr>
		            <td>3</td>
		            <td>Informação e comunicação</td>
		            <td>Eixo responsável por capacitar o aluno em ...</td>
		            <td><span class="glyphicon glyphicon-remove"></span></td>
		          </tr>
		        </tbody>
		      </table>
		</div>
		
		<ul class="pagination">
		  <li><a href="#">&laquo;</a></li>
		  <li><a href="#">1</a></li>
		  <li><a href="#">2</a></li>
		  <li><a href="#">3</a></li>
		  <li><a href="#">4</a></li>
		  <li><a href="#">5</a></li>
		  <li><a href="#">&raquo;</a></li>
		</ul>

	 <p style="margin-top:30px"><a class="btn btn-primary btn-lg" role="button" href="novoEixo.php">Novo</a></p>


	<?php include 'layout/rodape.php';?>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>

