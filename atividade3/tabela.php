<?php 
   
 $p = file('teste.csv');
  for($i=0; $i <sizeof($p); $i++){
  	$p[$i] = explode(',',$p[$i]);
  }
 ?>
 	<!DOCTYPE html>
 	<html>
 	<head lang="pt-br">
 	   <meta charset="UTF-8">
       </head>
       <style>
       	table{
  border:1px solid black;
  width: 25em;
  border-collapse: collapse;
  text-align: center;
  margin: auto;
}

th{
  color:black;
  font-size:20px;
  font-weight: bold;
  text-align: center;
  font-style: italic;
  }
  
 tr,td{
  
  border:1px solid black;
  text-align:center;
  padding: 0 8px;
  font-size:17px;
  color:black;
}
tr:nth-child(even){
	background: #EEDD82;
}
</style>
       <body>
       	<table>
       	  <tr>
       	       <th>nome</th>
                  <th>idade</th>
                  <th>espécie</th>
              </tr>
              
           <?php foreach($p as $dado): ?>
           	<tr>
           	<?php foreach($dado as $linha): ?>
           	<td><?=$linha?></td>
                   <?php endforeach ?>
                   	</tr>
                          <?php endforeach ?>
                          	
                	</table>
              </body>
              </html>