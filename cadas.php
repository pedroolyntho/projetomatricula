<!-- pagina responsavel por solicitar o usuario q digite os dados do aluno-->
<html>
<head>
<title> sistema de cadastro</title>
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
<form name = "signup" mothod = "post" action = "cadastrando.php">
<form class="form-horizontal">
  <div class="form-group" >
  <div class="col-sm-6">
  <!-- onde começa solicitar os dados em caixar de texto-->
    <label for="exampleInputEmail1"> NOME</label>
    <input type="text" class="form-control" name="nome" placeholder="Nome">
	</div>
  </div>
  <div class="form-group">
  <div class="col-sm-6">
    <label for="exampleInputPassword1"> CERTIDÃO DE NASCIMENTO</label>
    <input type="text" class="form-control" name="certidao_nascimento" placeholder="Certidão de Nascimento">
	</div>
  </div>
  <div class="form-group">
  <div class="col-sm-6">
    <label for="exampleInputPassword1"> NATURALIDADE</label>
    <input type="text" class="form-control" name="naturalidade" placeholder="Naturalidade">
	</div>
  </div>
  <div class="form-group">
  <div class="col-sm-6">
    <label for="exampleInputPassword1"> ESTADO</label>
    <input type="text" class="form-control" name="estado" placeholder="Estado">
	</div>
  </div>
  <div class="form-group">
  <div class="col-sm-6">
    <label for="exampleInputPassword1"> ENDEREÇO</label>
    <input type="text" class="form-control" name="endereco" placeholder="Endereço">
  </div>
  </div>
  <div class="form-group">
  <div class="col-sm-6">
    <label for="exampleInputPassword1"> NUMERO DA CASA</label>
    <input type="int" class="form-control" name ="n_casa" placeholder="Numero da casa">
  </div>
  </div>
  <div class="form-group">
  <div class="col-sm-6">
    <label for="exampleInputPassword1"> PAI</label>
    <input type="text" class="form-control" name="pai" placeholder="Pai">
  </div>
  </div>
  <div class="form-group">
  <div class="col-sm-6">
    <label for="exampleInputPassword1"> NATURALIDADE DO PAI</label>
    <input type="text" class="form-control" name="naturalidade_p" placeholder="Naturalidade da pai">
  </div>
  </div>
  <div class="form-group">
  <div class="col-sm-6">
    <label for="exampleInputPassword1"> PROFISSÃO DO PAI</label>
    <input type="text" class="form-control" name="profissao_p" placeholder="Profissão do pai">
  </div>
  </div>
  <div class="form-group">
  <div class="col-sm-6">
    <label for="exampleInputPassword1"> MÃE</label>
    <input type="text" class="form-control" name="mae" placeholder="Mãe">
  </div>
  </div>
  <div class="form-group">
  <div class="col-sm-6">
    <label for="exampleInputPassword1"> NATURALIDADE DA MÃE</label>
    <input type="text" class="form-control" name="naturalidade_m" placeholder="Naturalidade da mãe">
  </div>
  </div>
  <div class="form-group">
  <div class="col-sm-6">
    <label for="exampleInputPassword1"> PROFISSÃO DO MÃE</label>
    <input type="text" class="form-control" name="profissao_m" placeholder="Profissão do mãe">
	</div>
	</div>
	
	<div class="form-group">
    <label for="exampleInputPassword1"> &nbsp  &nbsp DATA DE NASCIMENTO</label>
    <input type="date" name="dat_nasc">
			<!-- COMEÇA OS COMBBOX SALVANDO DADOS NO ENUM-->
           <label>
                    <span> &nbsp  &nbsp  &nbsp &nbsp  &nbsp &nbsp INFORME O SEXO: </span>
                    <input type="radio" name="sexo" value="M" /><label>Masculino</label>
                    <input type="radio" name="sexo" value="F" /><label>Feminino</label>
          </label>
		   <label>
		  <span> &nbsp  &nbsp  &nbsp &nbsp  INFORME A SERIE: </span>
		  <select name="serie">
		  <option>selecione</option>
          <option value="PRIMEIRA">Primeira</option>
          <option value="SEGUNDA">Segunda</option>
          <option value="TERCEIRA">Terceira</option>
		  <option value="QUARTA">Quarta</option>
          </select>
		  </label>
		   <label>
		  <span> &nbsp  &nbsp  &nbsp &nbsp  INFORME O TURNO: </span>
		   <select name="turno">
		  <option>selecione</option>
          <option value="MATUTINO">Matutino</option>
          <option value="VESPERTINO">VESPERTINO</option>
          <option value="NOTURNO">NOTURNO</option>
          </select>
		  </label><br />
		  </div>
		  <div>
		  <label> 
		  <div class="form-group">
		  <label for="exampleInputPassword1"> &nbsp  &nbsp DATA DE MATRICULA</label>
		  <input type="date" name="dat_mat">
		  
		  <span> &nbsp  &nbsp INFORME TURMA: </span>
		  <select name="turma">
		  <option>selecione</option>
          <option value="A">A</option>
          <option value="B">B</option>
          <option value="C">C</option>
		  <option value="D">D</option>
          </select>
		  </label>
		  </div> 
		 	  
  <div class="form-group">
  <div class="col-sm-12">
    <label for="exampleInputPassword1"> OBSERVAÇÕES</label><br>
    <input type="text" class="form-control" name="obs"><br>
  </div>
  </div>
  <!-- fim de solicitação de dados-->
  <input type = "submit" class="btn btn-primary btn-lg active" value ="salvar" /><br /><br /><!-- ao clicar em salvar ele levara a outra pagina cadastrando.php -->
</form>


</form>
</body>

</html>