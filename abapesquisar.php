<!--essa pagina tem a função de pesquisar o aluno pelo nome ou retornar todos os alunos-->
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
<form method = "POST" action="pesquisar.php">
<!--pesquisa o aluno pelo nome -->
<label for="text" class="col-sm-2 control-label">PESQUISAR POR NOME:</label><input type= "text" name="pesquisar" placeholder="PESQUISAR">
	<input type="submit" value="Pesquisar"><!--ao clicar em Pesquisar ele lhe levara para pesquisar.php-->
</form>

</body>
</html>