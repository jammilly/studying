<?php
session_start();

$senha = $_POST['senha'] ?? '';
$login = $_POST['login'] ?? '';


$arquivo = file('usuarios.csv');
for($i = 0; $i< sizeof($arquivo); $i++){
	$arquivo[$i] = explode(',', trim($arquivo[$i]));

	if($senha == $arquivo[$i][3] && $login == $arquivo[$i][2] ){
		$_SESSION['acesso'] = true;
	
 break;
 }
 
} 

   header('location: tarefas.php?');
   

?>