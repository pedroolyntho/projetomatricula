<html><!-- abrir um codigo em html -->
<head><!-- cabeçalho da pagina-->
<title> cadastro</title> <!-- titulo da pagina-->
</head><!-- acaba o cabeçalho-->
<body>
<form mothod = "POST" action = "abapesquisar.php">
<link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<?php
// pega os dados e joga dentro das variaveis php
include './connection.php';
$id = $_REQUEST['codigo'];
$nome = $_REQUEST['nome'];
$certidao_nascimento = $_REQUEST['certidao_nascimento'];
$naturalidade = $_REQUEST['naturalidade'];
$estado = $_REQUEST['estado'];
$endereco = $_REQUEST['endereco'];
$n_casa = $_REQUEST['n_casa'];
$pai = $_REQUEST['pai'];
$naturalidade_p = $_REQUEST['naturalidade_p'];
$profissao_p = $_REQUEST['profissao_p'];
$mae = $_REQUEST['mae'];
$naturalidade_m = $_REQUEST['naturalidade_m'];
$profissao_m = $_REQUEST['profissao_m'];
$dat_nasc = $_REQUEST['dat_nasc'];
$sexo = $_REQUEST['sexo'];
$serie = $_REQUEST['serie'];
$turno = $_REQUEST['turno'];
$turma = $_REQUEST['turma'];
$dat_mat = $_REQUEST['dat_mat'];
// faz a alteração dos dados com update e comparando seu id da tabela aluno
$query = "update aluno set nome='".$nome."', certidao_nascimento='".$certidao_nascimento."', naturalidade='".$naturalidade."', estado='".$estado."', endereco='".$endereco."', n_casa='".$n_casa."', pai='".$pai."', naturalidade_p='".$naturalidade_p."', profissao_p='".$profissao_p."', mae='".$mae."', naturalidade_m='".$naturalidade_m."', profissao_m='".$profissao_m."',dat_nasc='".$dat_nasc."',sexo='".$sexo."' where id_aluno=".$id;
mysqli_query($mysqli, $query) or die($query."<br>".mysqli_error());//manda pro banco de dados
// faz a alteração dos dados com update e comparando seu id da tabela matricula
$queryy="update matricula set serie='".$serie."',turno='".$turno."',turma='".$turma."',dat_mat='".$dat_mat."' where n_aluno=".$id;
mysqli_query($mysqli, $queryy) or die($queryy."<br>".mysqli_error());//manda pro banco de dados
?>
<p>
	 <font size="10" face="Verdana">
	 <i>  Aluno altarado com sucesso!</i>
	 </p>
 <input type = "submit" class="btn btn-primary btn-lg active" value ="sair" />
</body>

</html>