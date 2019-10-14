<?php include 'head.php' ?>
			<div>
			<h1>Olá!</h1>
			
			<?php
  
  $dados = file('tarefas.csv');
  for($i = 0; $i < sizeof($dados); $i++){
  	$dados[$i] = explode(',',$dados[$i]);
  }
  ?>
			<table>
				<tr>
				<th>tarefas</th>
				<th>obs</th>
				<th>ações</th>
				<tr>
					<?php foreach ($dados as $keys => $dado): ?> 
  		<tr>
  			<?php foreach($dado as $arq): ?>
  				<td><?=$arq?></td>
  			<?php endforeach ?>
	<td> <a href="delete.php?id=<?=$keys?>">&times;<?= $keys ?></a></td>
  		</tr>
  	<?php endforeach ?>
  	</table>
  <div class="container">
  	<form action="addtarefa.php" method="POST">
  	<fieldset>
  	<legend>Nova tarefa</legend>
  <input type="text" name="nome" placeholder="Digite sua tarefa">
  <input type="text" name="obs" placeholder="Observações...">
  <input type="submit" value="Adicionar">
  	</fieldset>
  </form>
  <a href="sair.php">Sair</a>
  
