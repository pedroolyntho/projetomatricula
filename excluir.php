<html><!-- abre um codigo em html -->
<head><!-- cabeçalho da pagina-->
<title> cadastro</title> <!-- titulo da pagina-->
</head><!-- acaba o cabeçalho-->
<body>
<form mothod = "POST" action = "abapesquisar.php">
<link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<?php
	include'connection.php';
	
	 $id = $_REQUEST['id_aluno'];
	 $delete_aluno = "delete from  aluno where id_aluno='$id'";
	$deletar_aluno = mysqli_query($mysqli, $delete_aluno);
	
	 $delete_matricula = "delete from  matricula where n_aluno='$id'";
	$deletar_aluno = mysqli_query($mysqli, $delete_matricula);
	
?>
<p>
	 <font size="10" face="Verdana">
	 <i>  Aluno excluido com sucesso!</i>
	 </p>
 <input type = "submit" class="btn btn-primary btn-lg active" value ="sair" />
</body>

</html>