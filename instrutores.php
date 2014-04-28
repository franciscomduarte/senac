
<!DOCTYPE html>
<html lang="en">

	<?php include 'layout/head.php';?>

  	<body>

    <div class="container">

	<?php include 'layout/menu.php';	?>
      
		<div class="panel panel-default">
		  <!-- Default panel contents -->
		  <div class="panel-heading">Instrutores</div>
		  <div class="panel-body bg-primary">
		    <p>Listagem de Instrutores cadastrados no sistema</p>
		  </div>
		
		  <!-- Table -->
		<table class="table">
		        <thead>
		          <tr>
		            <th>#</th>
		            <th>Nome</th>
		            <th>Email</th>
		            <th>Telefone</th>
		            <th>Ações</th>
		          </tr>
		        </thead>
		        <tbody>
		          <tr>
		            <td>1</td>
		            <td>Francisco Molina</td>
		            <td>molina@e2f.com.br</td>
		            <td>(61) 33134694</td>
		            <td><span class="glyphicon glyphicon-remove"></span></td>
		          </tr>
		          <tr>
		            <td>2</td>
		            <td>José da Silva</td>
		            <td>jsilva@gmail.com</td>
		            <td>(61) 33133333</td>
		            <td><span class="glyphicon glyphicon-remove"></span></td>
		          </tr>
		          <tr>
		            <td>3</td>
		            <td>Maria da Penha</td>
		            <td>mpenha@yahoo.com</td>
		            <td>(61) 33138833</td>
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

	 <p style="margin-top:30px"><a class="btn btn-primary btn-lg" role="button" href="novoInstrutor.php">Novo</a></p>


	<?php include 'layout/rodape.php';?>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>

