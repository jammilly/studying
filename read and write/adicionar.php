<?php 

$dados = $_POST['nome'] .','. $_POST['especie'] .','. $_POST['idade']. "\n";

$handle = fopen('teste.csv', 'a');
fwrite($handle, $dados);


 header('Location: table.php');
  
?>

