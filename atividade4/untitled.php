 <!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <title>tabela</title>
   <style>
body{
 background:#7B68EE;
}

h2{
  margin-top: 30px;
  text-align: center;
  color:#000;
  font-size: 50px;
  font-family: Tahoma, Geneva, sans-serif;
  text-transform: uppercase;

}
table{
  border:1px solid black;
  width: 50em;
  border-collapse: collapse;
  border:1px solid black;
  height: 400px;
  text-align: center;
  margin-left: 500px;

}
th{
  color:black;
  font-size:30px;
  font-weight: normal;
  text-align: center;
  
}
h2{
  
  color: black;
  font-size:35px;
  text-align: relative;
}
thead{
  background: #ccc
  border-top:1px solid #a5a5a5;
  border-bottom: 1px solid #a5a5a5;
}
tr,td{
  
  border:1px solid black;
  text-align:center;
  padding:8px;
  font-size:17px;
  color:black;
}
tr{
  background-color: #fff;
    
}
tr:nth-child(even){
  background-color: #fff;
  
}
input[type=button]{
    color: #000;
    margin-top: 50px;
    margin-left: 720px;
    border: none;
    width: 400px;
    background: #fff;
    font-size: 16px;
    line-height: 10px;
    padding: 10px 0;
    border-radius: 15px;
    cursor:pointer;



}
input[type=button]:hover{
  color:#000;
  background-color: #E0FFFF;

}
</style>
 </head>
 <body>
   
 <?php
    $dados = file('dados.csv');
    for($i = 0; $i < sizeof($dados); $i++) {
        $dados[$i] = explode(",", $dados[$i]);
    }
  ?>
  
  <h2 id="t2">Dados do usuário</h2>

    <table>
<tr>
   <th>Nome </th>
   <th>email </th>
   <th>Idade </th>
   <th>pais </th>
</tr>
    <?php foreach ($dados as $dadosUser): ?>
        <tr>
          <?php foreach ($dadosUser as $dados): ?>
           <td><?= $dados ?></td>
           <?php endforeach ?>
        </tr>
    <?php endforeach ?>
  </table>
<a href="jammilly.php"><input  type="button" value="voltar" ></a>
 </body>
 </html>
