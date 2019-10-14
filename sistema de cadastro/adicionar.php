<?php
$dados = "\n" . $_POST['nome'] .  ',' . $_POST['cpf'] .  ',' .$_POST['login'] .  ',' .    $_POST['senha'];

$handle = fopen('usuarios.csv', 'a');
fwrite($handle, $dados);

header('location:login.php?taescrito');

?>