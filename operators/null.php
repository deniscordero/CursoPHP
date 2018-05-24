<?php
  $a = 'value x';
  // $a = null;
  // Si la variable $a no existe php tambien regresa el valor default
  $result = $a ?? 'default';
  var_dump($result);
?>
