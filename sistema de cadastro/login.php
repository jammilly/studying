<?php include 'head.php' ?>
<form action="auth.php" method="POST" class="formuser">
					<fieldset>
						<legend>Entrar</legend>
					<label>Login: </label><input type="text" name="login">
					<label>Senha: </label><input type="password" name="senha" >
					<input type="submit" value="entrar">	
					</fieldset>
				</form>
				<a href='cadastro.php'>Cadastrar</a>
				
				<?php include 'foot.php' ?>