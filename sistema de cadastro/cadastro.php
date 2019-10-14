<?php include 'head.php'?>
		
		<form action="adicionar.php" method="POST">
			<fieldset>
				<legend>Cadastro</legend>
				<table>
					<tr>
				<td><label>Nome: </label><input type="text" name="nome" placeholder="Jao">
			</td>
			<tr>
			<td>
		<label>CPF:  </label><input type="text" name="cpf" id="cpf" placeholder="333.333.333-33">
			</td>
			</tr>
			<tr>
			<td>
		<label>Login: </label><input type="text" name="login" id="login" placeholder="jaoaoao">
			</td>
			</tr>
			<tr>
			<td>
		<label>Senha: </label><input type="password" name="senha" id="senha" maxlength="8">
			</td>
			<td>
			<input type="submit" value="Cadastrar">
				</td>
				</tr>
				</table>
				</fieldset>
		</form>
		
		<a href="login.php">Entrar</a>
		
		
	
		<?php include 'foot.php' ?>
				
	