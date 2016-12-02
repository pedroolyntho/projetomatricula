<!--pagina responsavel por imprimir seus dados dentro de cada campo para uma possivel alteração-->
<?php
include 'connection.php';

 $id = $_REQUEST['id_aluno'];
 $query = "select * from aluno where id_aluno=".$id;
 $dados = mysqli_query($mysqli, $query);
 $resultado = mysqli_fetch_array($dados);
 $queryy = "select * from matricula where n_aluno=".$id;
  $dado = mysqli_query($mysqli, $queryy);
 $resultad = mysqli_fetch_array($dado);
 
 // coloca dentro dessas novas variaveis os dados dos alunos
 $nome_alterar = $resultado['nome'];
 $certidao_alterar = $resultado['certidao_nascimento'];
 $naturalidade_alterar = $resultado['naturalidade'];
 $estado_alterar = $resultado['estado'];
 $endereco_alterar = $resultado['endereco'];
 $ncasa_alterar = $resultado['n_casa'];
 $pai_alterar = $resultado['pai'];
 $naturalidadep_alterar = $resultado['naturalidade_p'];
 $profissaop_alterar = $resultado['profissao_p'];
 $mae_alterar = $resultado['mae'];
 $naturalidadem_alterar = $resultado['naturalidade_m'];
 $profissaom_alterar = $resultado['profissao_m'];
 $dat_nasc_alterar = $resultado['dat_nasc'];
 $sexo_alterar = $resultado['sexo'];
 $serie_alterar = $resultad['serie'];
 $turno_alterar = $resultad['turno'];
 $turma_alterar = $resultad['turma'];
 $dat_mat_alterar = $resultad['dat_mat'];
 
?>
<!--retorna dentro de seus campos os dados do alunos selecionado-->
<form mothod = "POST" action = "alterar_gravar.php">
	<input type="hidden" name="codigo" value="<?php echo $id;?>">
Nome: <input type = "text" name= "nome" value="<?php if($nome_alterar != null){echo $nome_alterar;}else{"";} ?>"/><br /><br />
Certidão de nascimento: = <input type = "text" name= "certidao_nascimento" value="<?php if($certidao_alterar != null){echo $certidao_alterar;}else{"";} ?>"/><br /><br />
Naturalidade: = <input type = "text" name= "naturalidade" value="<?php if($naturalidade_alterar != null){echo $naturalidade_alterar;}else{"";} ?>"/><br /><br />
Estado: <input type = "text" name ="estado" value="<?php if($estado_alterar != null){echo $estado_alterar;}else{"";} ?>" /><br /><br />
Endereço:<input type = "text" name ="endereco" value="<?php if($endereco_alterar != null){echo $endereco_alterar;}else{"";} ?>" /><br /><br />
Numero da casa: = <input type = "int" name= "n_casa" value="<?php if($ncasa_alterar != null){echo $ncasa_alterar;}else{"";} ?>"/><br /><br />
Pai: <input type = "text" name ="pai" value="<?php if($pai_alterar != null){echo $pai_alterar;}else{"";} ?>"/><br /><br />
Naturalidade_do_pai:<input type = "text" name ="naturalidade_p" value="<?php if($naturalidadep_alterar != null){echo $naturalidadep_alterar;}else{"";} ?>"/><br /><br />
Profissão do pai: = <input type = "text" name ="profissao_p" value="<?php if($profissaop_alterar != null){echo $profissaop_alterar;}else{"";} ?>" /><br /><br />
Mãe:<input type = "text" name ="mae" value="<?php if($mae_alterar != null){echo $mae_alterar;}else{"";} ?>"/><br /><br />
Naturalidade_da_mãe: = <input type = "text" name ="naturalidade_m" value="<?php if($naturalidadem_alterar != null){echo $naturalidadem_alterar;}else{"";} ?>" /><br /><br />
Profissão da mãe: = <input type = "text" name ="profissao_m" value="<?php if($profissaom_alterar != null){echo $profissaom_alterar;}else{"";} ?>"/><br /><br />
data de nascimento: = <input type = "date" name ="dat_nasc" value="<?php if($dat_nasc_alterar != null){echo $dat_nasc_alterar;}else{"";} ?>"/><br /><br />
 <span>Informe o sexo: </span>
<?php
  if($sexo_alterar == 'M' ){ ?>
	 <input type='radio' name='sexo' value='M' checked> MASCULINO
	 <input type='radio' name='sexo' value='F'> FEMININO
	 
  <?php }elseif($sexo_alterar == 'F'){ ?>
	 <input type='radio' name='sexo' value='M'> MASCULINO
	 <input type='radio' name='sexo' value='F' checked> FEMININO
  <?php } ?>
  <span>Informe o serie: </span>

  <div>
		   <label>
		  <span>Informe a serie: </span>
		  <select name="serie">
		  <?php if($serie_alterar == 'PRIMEIRA' ){ ?>
		  <option>selecione</option>
          <option  SELECTED value="PRIMEIRA">Primeira</option>
          <option  value="SEGUNDA">Segunda</option>
          <option value="TERCEIRA">Terceira</option>
		  <option value="QUARTA">Quarta</option>
		   <?php  if($serie_alterar == 'SEGUNDA' ){ ?>
		  <option>selecione</option>
          <option  value="PRIMEIRA">Primeira</option>
          <option SELECTED value="SEGUNDA">Segunda</option>
          <option value="TERCEIRA">Terceira</option>
		  <option value="QUARTA">Quarta</option>
		  <?php } elseif($serie_alterar == 'TERCEIRA'){ ?>
		   <option>selecione</option>
          <option  value="PRIMEIRA">Primeira</option>
          <option  value="SEGUNDA">Segunda</option>
          <option SELECTED value="TERCEIRA">Terceira</option>
		  <option value="QUARTA">Quarta</option>
		   <?php } ?>
		    <?php } elseif($serie_alterar == 'QUARTA'){ ?>
		   <option>selecione</option>
          <option  value="PRIMEIRA">Primeira</option>
          <option  value="SEGUNDA">Segunda</option>
          <option value="TERCEIRA">Terceira</option>
		  <option SELECTED value="QUARTA">Quarta</option>
		   <?php } ?>
          </select>
		  </label><br />
		  </div>
 
			<label>
		  <span>Informe o turno: </span>
		   <select name="turno">
		   <?php if($turno_alterar == 'MATUTINO' ){ ?>
		  <option>selecione</option>
          <option SELECTED value="MATUTINO">Matutino</option>
          <option value="VESPERTINO">VESPERTINO</option>
          <option value="NOTURNO">NOTURNO</option>
		  <?php  if($turno_alterar == 'VESPERTINO' ){ ?>
		  <option>selecione</option>
		  <option value="MATUTINO">Matutino</option>
          <option SELECTED value="VESPERTINO">VESPERTINO</option>
          <option value="NOTURNO">NOTURNO</option>
		  <?php } elseif($turno_alterar == ''){ ?>
		  <option SELECTED > selecione</option>
		  <option value="MATUTINO">Matutino</option>
          <option value="VESPERTINO">VESPERTINO</option>
          <option value="NOTURNO">NOTURNO</option>
		  <?php } ?>
		  <?php } elseif($turno_alterar == 'NOTURNO'){ ?>
		  <option SELECTED > selecione</option>
		  <option value="MATUTINO">Matutino</option>
          <option value="VESPERTINO">VESPERTINO</option>
          <option value="NOTURNO">NOTURNO</option>
		  <?php } ?>
          </select>
		  </label><br />
		  
		  <div>
		  <label>
		  <span>Informe a turma: </span>
		  <select name="turma">
		   <?php if($turma_alterar == '' ){ ?>
		  <option SELECTED >selecione</option>
          <option value="A">A</option>
          <option value="B">B</option>
          <option value="C">C</option>
		  <option value="D">D</option>
		  <?php  if($turma_alterar == 'A' ){ ?>
		  <option >selecione</option>
          <option SELECTED value="A">A</option>
          <option value="B">B</option>
          <option value="C">C</option>
		  <option value="D">D</option>
		   <?php  if($turma_alterar == 'B' ){ ?>
		  <option >selecione</option>
          <option value="A">A</option>
          <option SELECTED value="B">B</option>
          <option value="C">C</option>
		  <option value="D">D</option>
		  <?php } elseif($turma_alterar == 'C'){ ?>
		  <option >selecione</option>
          <option value="A">A</option>
          <option value="B">B</option>
          <option SELECTED value="C">C</option>
		  <option value="D">D</option>
		   <?php } ?>
		  <?php } elseif($turma_alterar == 'D'){ ?>
		  <option >selecione</option>
          <option value="A">A</option>
          <option value="B">B</option>
          <option value="C">C</option>
		  <option SELECTED value="D">D</option>
		   <?php } ?>
		   <?php } ?>
          </select>
		  </label><br />
		  </div>
 
		data da matricula: = <input type = "date" name ="dat_mat" value="<?php if($dat_mat_alterar != null){echo $dat_mat_alterar;}else{"";} ?>"/><br /><br />
		 
<input type = "submit" value ="alterar" /><br /><br /> <!--ao clicar em alterar ele lhe leva para uma nova pagina alterar_gravar.php-->
</form>