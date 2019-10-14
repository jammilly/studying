<?php
  $arq = file('tarefas.csv');
  $id = $_GET['id'];
  unset($arq[$id]);
  file_put_contents('tarefas.csv', implode('', $arq));

  header('location:tarefas.php?tadeletado');
?>