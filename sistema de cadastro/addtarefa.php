<?php
$dados = "\n" . $_POST['nome'] .  ',' . $_POST['obs'];

$handle = fopen('tarefas.csv', 'a');
fwrite($handle, $dados);

header('location:tarefas.php?taescrito');

?>