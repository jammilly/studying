<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>tabela php</title>
</head>
<style>

   body{
 background:#7B68EE;
}
h1{
	margin-top: 400px;
	text-align: center;
	color:#000;
	font-size: 50px;
	font-family: Tahoma, Geneva, sans-serif;
	text-transform: uppercase;

}
input[type=button]{
    color: #000;
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

<body>
<h1>Feito!</h1>
<?php

 $dado = $_POST['nome'] . ',' . $_POST['email'] . ',' . $_POST['idade'] . ',' . $_POST['pais'] . "\n";

    $handle = fopen('dados.csv', 'a');
    fwrite($handle, $dado); 

?>
<a href="jammilly.php"><input  type="button" value="voltar" ></a>
</body>
</html>