<!DOCTYPE html>
<html lang= "pt-br">
<head>
	<meta charset= "UTF-8">
	<title>tabela dinâmica</title>
	<style>
	  table, tr{
  		border: 1px solid black;
  		text-align: center;
  	}
  	nth-child(even){
  		background: skyblue;
  	}
  	</style>
</head>
<body>
	<?php
		$dados = [
		 	['Damon', 125, 'vampiro'],
		 	['Klaus', 1034, 'hibrido original'],
		 	['Elijah', 1049, 'vampiro original'],
		 	['Rebekah', 1019, 'vampira original'],
		 	['Alaric', 43, 'caçador de vampiros'],
		 	['Bonnie', 25, 'bruxa bennet']
		];
	?>
    <h1> Personagens TVD </h1>
<table>
	<tr>
		<th>nome</th>
		<th>idade</th>
		<th>espécie</th>
</tr>
 <?php foreach($dados as $dado): ?>
   <?php
   list($nome, $idade, $especie) = $dado;
?>
    <tr>
		<td><?=$nome?></td>
         <td><?=$idade?></td>
         <td><?=$especie?></td>
</tr>
<?php endforeach ?>
</table>

 </body>
</html>