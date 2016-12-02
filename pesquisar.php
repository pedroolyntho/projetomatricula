<!--pagina que retorna aluno -->
<html>
<head>
<title> PESQUISAR ALUNO</title>
</head>
<body>
<link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" >sistema de cadastro</a>
    </div>
</div>
</nav>
<?php

	include 'connection.php';//abre a conexão com o banco de dados

	$pesquisar = $_POST['pesquisar'];//pega o nome do aluno pesquisado
	$result_aluno = "SELECT * FROM aluno WHERE nome LIKE '%$pesquisar%' ";//seleciona os alunos pesquisados obs (%) siginifica q posso ter qualquer string a frente ou atraz do nome pesquisado ja quer tem dois % um de cada lado
	$resultado_aluno = mysqli_query($mysqli, $result_aluno);
	?>
	<div class="col-sm-10">
	<table border="1" class="table table-striped"> <!--criação da tabela-->
		<tr>
			<td>Nome</td>
			<td>Pai</td>
			<td>Mae</td>
			<td>certidão</td>
			<td>id</td>
			<td>serie</td>
			<td>Alterar</td>
			<td>Excluir</td>
		</tr>
	
	<?php
	//preenchimento da tabela com os dados dos alunos
	while($rows_aluno = mysqli_fetch_array($resultado_aluno)) {
		$id = $rows_aluno['id_aluno'];
		$mat_id = $rows_aluno['id_aluno'];
		$result_matricula = "select * from matricula where n_aluno = '$mat_id'";//seleciona os alunos pelo id
		$resultado_matricula = mysqli_query($mysqli, $result_matricula);
		
		echo "<tr>";
		echo "<td>".$rows_aluno['nome']."</td>";
		echo "<td>".$rows_aluno['pai']."</td>";
		echo "<td>".$rows_aluno['mae']."</td>";
		echo "<td>".$rows_aluno['certidao_nascimento']."</td>";
		echo "<td>".$rows_aluno['id_aluno']."</td>";
		while($rows_matricula = mysqli_fetch_array($resultado_matricula)) {
			echo "<td>".$rows_matricula['serie']."</td>";
		echo "<td><a href= editar.php?id_aluno=$id>Alterar</a></td>"; //ao clicar em alterar ele compara o id do aluno com o id escolhido e lhe dar os dados em uma nova pagina, a editar.php
		echo "<td><a href= excluir.php?id_aluno=$id>Excluir</a></td>";//ao clicar em excluir ele compara o id do aluno com o id escolhido e excliur o aluno
		echo "</tr>";
		}
	}
	
	?>
	</table>
	</div>
</body>
</html>