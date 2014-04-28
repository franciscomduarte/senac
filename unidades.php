
<!DOCTYPE html>
<html lang="en">

	<?php include 'layout/head.php';?>

  	<body>

    <div class="container">

	<?php include 'layout/menu.php';	?>
      
		<div class="panel panel-default">
		  <!-- Default panel contents -->
		  <div class="panel-heading">Unidades</div>
		  <div class="panel-body bg-primary">
		    <p>Listagem de Unidades cadastradas no sistema</p>
		  </div>
		
		  <!-- Table -->
		<table class="table">
		        <thead>
		          <tr>
		            <th>#</th>
		            <th>Nome</th>
		            <th>Descrição</th>
		            <th>Endereço</th>
		            <th>Telefone</th>
		            <th>Gestor</th>
		            <th>Substituto</th>
		            <th>Ações</th>
		          </tr>
		        </thead>
		        <tbody>
		          <tr>
		            <td>1</td>
		            <td>Ações Móveis</td>
		            <td>Unidade responsável em ...</td>
		            <td>SIA trecho 03 lote 08</td>
		            <td>(61) 33131122</td>
		            <td>Maria Lucila Lins Perciano</td>
		            <td>Robério da Silva</td>
		            <td><span class="glyphicon glyphicon-remove"></span></td>
		          </tr>
		          <tr>
		            <td>2</td>
		            <td>903 SUL</td>
		            <td>Unidade responsável em ...</td>
		            <td>Quadra 903 - Asa Sula</td>
		            <td>(61) 33131133</td>
		            <td>Tânia Gonçalves</td>
		            <td>Ledir Gomes</td>
		            <td><span class="glyphicon glyphicon-remove"></span></td>
		          </tr>
		          <tr>
		            <td>3</td>
		            <td>Sobradinho</td>
		            <td>Unidade responsável em ...</td>
		            <td>Quadra 130 lote 3</td>
		            <td>(61) 33131144</td>
		            <td>Francisco Molina</td>
		            <td>Lara Cristian</td>
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

	 <p style="margin-top:30px"><a class="btn btn-primary btn-lg" role="button" href="novoUnidade.php">Novo</a></p>

	<?php include 'layout/rodape.php';?>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>

