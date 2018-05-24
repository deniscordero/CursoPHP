<?php
  // function hello($name){
  //   echo 'hello ' . $name;
  //   echo '<br>';
  // }
  //
  // hello('Mary');
  // hello('Elizabeth');
  $x = 100;

  function sum($a, $b){
    $x = $a + $b;
    return $x;
  }

  $c = sum(1, 2);
  var_dump($c);

  $c = sum(11, 22);
  var_dump($c);
  var_dump($x);
?>
