
<!DOCTYPE html>
<html lang="en">
 
	<?php include 'layout/head.php';?>

  	<body>

    <div class="container">

	<?php include 'layout/menu.php';	?>
      
		<div class="panel panel-default">
		  <!-- Default panel contents -->
		  <div class="panel-heading">Eventos</div>
		  <div class="panel-body bg-primary">
		    <p>Listagem de eventos cadastrados no sistema</p>
		  </div>
		
		  <!-- Table -->
		<table class="table">
		        <thead>
		          <tr>
		            <th>#</th>
		            <th>Nome</th>
		            <th>Período</th>
		            <th>Programação</th>
		            <th>Professor</th>
		            <th>Status</th>
		            <th>Ações</th>
		          </tr>
		        </thead>
		        <tbody>
		          <tr>
		            <td>1</td>
		            <td>Curso de Informática</td>
		            <td>05/12/2014 a 12/12/2014</td>
		            <td>Microsoft Word, Excel e Internet Básica - Ações Móveis</td>
		            <td>Francisco Molina</td>
		            <td>Previsto</td>
		            <td><span class="glyphicon glyphicon-remove"></span></td>
		          </tr>
		          <tr>
		            <td>2</td>
		            <td>Curso de Maquiagem</td>
		            <td>05/12/2014 a 12/12/2014</td>
		            <td>Microsoft Word, Excel e Internet Básica - Sobradinho</td>
		            <td>José da Silva</td>
		            <td>Previsto</td>
		            <td><span class="glyphicon glyphicon-remove"></span></td>
		          </tr>
		          <tr>
		            <td>3</td>
		            <td>Curso de Informática</td>
		            <td>05/12/2014 a 12/12/2014</td>
		            <td>Microsoft Word, Excel e Internet Básica - 903 sul</td>
		            <td>Maria da Penha</td>
		            <td>Concluído</td>
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

	 <p style="margin-top:30px"><a class="btn btn-primary btn-lg" role="button" href="novoEvento.php">Novo</a></p>


	<?php include 'layout/rodape.php';?>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>

