<!DOCTYPE html>
	<html lang="en">
			<head>
				<meta charset="UTF-8">
					<title>tabela</title>
					<style>
						h1{
							text-align: center;
							}
						table{
							width: 100%
							}
						table, tr{
							border: 1px solid black;
							border-collapse: collapse;
							background: #fff;
							text-align: center;
							}
						tr:nth-child(even){
							background: skyblue;
							}
			</style>
		<body>
				<?php 
					 $adedonha = array_map('str_getcsv', file('tdados.csv'));
					?>
					<h1>adedonha</h1>
					<table>
						<tr>
							<th>nome</th>
							<th>fruta</th>
							<th>cidade</th>
							<th>cor</th>
						</tr>
						
					<?php foreach ($adedonha as $item): ?>
						<?php
						list($nome, $fruta, $cidade, $cor) = $item;
						?>
					<tr>
						<td><?=$nome?></td>
						<td><?=$fruta?></td>
						<td><?=$cidade?></td>
						<td><?=$cor?></td>
					</tr>
					<?php endforeach ?>
				</table>
			</body>
			</html>