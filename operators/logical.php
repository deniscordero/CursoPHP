<?php
  $v1 = 1;
  $v2 = 1;

  $v3 = 2;
  $v4 = 4;

  $resultado1 = $v1 == $v2;
  echo 'Result 1: <br>';
  var_dump($resultado1);
  echo '<br>';
  $resultado2 = $v3 == $v4;
  echo 'Result 2: <br>';
  var_dump($resultado2);

  $resultado3 = $resultado1 || $resultado2;

  echo '<br>';
  echo '<br>';
  echo 'Resultado Final: <br>';
  var_dump($resultado3);

?>
