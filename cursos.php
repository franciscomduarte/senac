
<!DOCTYPE html>
<html lang="en">

	<?php include 'layout/head.php';?>

  	<body>

    <div class="container">

	<?php include 'layout/menu.php';	?>
      
		<div class="panel panel-default">
		  <!-- Default panel contents -->
		  <div class="panel-heading">Cursos</div>
		  <div class="panel-body bg-primary">
		    <p>Listagem de Cursos cadastrados no sistema</p>
		  </div>
		
		  <!-- Table -->
		<table class="table">
		        <thead>
		          <tr>
		            <th>#</th>
		            <th>Nome</th>
		            <th>Eixo Técnologico</th>
		            <th>Total de Horas</th>
		            <th>Matriz Currícular</th>
		            <th>Plano de Curso</th>
		            <th>Ações</th>
		          </tr>
		        </thead>
		        <tbody>
		          <tr>
		            <td>1</td>
		            <td>Cabeleleiro</td>
		            <td>Ambiente e Saúde</td>
		            <td>400h</td>
		            <td align="center"><a href="#"><img alt="Matriz Curricular" src="images/pdf.jpeg" width="30" height="30"></a></td>
		            <td align="center"><a href="#"><img alt="Plano de Curso" src="images/doc.jpeg" width="30" height="30"></a></td>
		            <td><span class="glyphicon glyphicon-remove"></span></td>
		          </tr>
		          <tr>
		            <td>2</td>
		            <td>Copeiro Hospitalar</td>
		           <td>Ambiente e Saúde</td>
		            <td>230h</td>
		             <td align="center"><a href="#"><img alt="Matriz Curricular" src="images/pdf.jpeg" width="30" height="30"></a></td>
		            <td align="center"><a href="#"><img alt="Plano de Curso" src="images/doc.jpeg" width="30" height="30"></a></td>
		            <td><span class="glyphicon glyphicon-remove"></span></td>
		          </tr>
		          <tr>
		            <td>3</td>
		            <td>Corte e Escova</td>
		            <td>Ambiente e Saúde</td>
		            <td>230h</td>
		             <td align="center"><a href="#"><img alt="Matriz Curricular" src="images/pdf.jpeg" width="30" height="30"></a></td>
		            <td align="center"><a href="#"><img alt="Plano de Curso" src="images/doc.jpeg" width="30" height="30"></a></td>
		            <td><span class="glyphicon glyphicon-remove"></span></td>
		          </tr>
		          
		          <tr>
		            <td>4</td>
		            <td>Depilador</td>
		            <td>Ambiente e Saúde</td>
		            <td>200h</td>
		             <td align="center"><a href="#"><img alt="Matriz Curricular" src="images/pdf.jpeg" width="30" height="30"></a></td>
		            <td align="center"><a href="#"><img alt="Plano de Curso" src="images/doc.jpeg" width="30" height="30"></a></td>
		            <td><span class="glyphicon glyphicon-remove"></span></td>
		          </tr>
		          <tr>
		            <td>5</td>
		            <td>Design de Sobracelhas </td>
		            <td>Ambiente e Saúde</td>
		            <td>20h</td>
		             <td align="center"><a href="#"><img alt="Matriz Curricular" src="images/pdf.jpeg" width="30" height="30"></a></td>
		            <td align="center"><a href="#"><img alt="Plano de Curso" src="images/doc.jpeg" width="30" height="30"></a></td>
		            <td><span class="glyphicon glyphicon-remove"></span></td>
		          </tr>
		          <tr>
		            <td>6</td>
		            <td>Especialização Técnica em Enfermagem do Trabalho</td>
		            <td>Ambiente e Saúde</td>
		            <td>480h</td>
		             <td align="center"><a href="#"><img alt="Matriz Curricular" src="images/pdf.jpeg" width="30" height="30"></a></td>
		            <td align="center"><a href="#"><img alt="Plano de Curso" src="images/doc.jpeg" width="30" height="30"></a></td>
		            <td><span class="glyphicon glyphicon-remove"></span></td>
		          </tr>
		          <tr>
		            <td>7</td>
		            <td>Especialização Técnica em Instrumentação Cirúrgica</td>
		            <td>Ambiente e Saúde</td>
		            <td>380h</td>
		            <td align="center"><a href="#"><img alt="Matriz Curricular" src="images/pdf.jpeg" width="30" height="30"></a></td>
		            <td align="center"><a href="#"><img alt="Plano de Curso" src="images/doc.jpeg" width="30" height="30"></a></td>
		            <td><span class="glyphicon glyphicon-remove"></span></td>
		          </tr>
		          
		          <tr>
		            <td>8</td>
		            <td>Manicure e Pedicure</td>
		            <td>Ambiente e Saúde</td>
		            <td>200h</td>
		            <td align="center"><a href="#"><img alt="Matriz Curricular" src="images/pdf.jpeg" width="30" height="30"></a></td>
		            <td align="center"><a href="#"><img alt="Plano de Curso" src="images/doc.jpeg" width="30" height="30"></a></td>
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

	 <p style="margin-top:30px"><a class="btn btn-primary btn-lg" role="button" href="novoCurso.php">Novo</a></p>


	<?php include 'layout/rodape.php';?>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>

