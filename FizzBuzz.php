<?php

function a($i) {
  $b = [
    15 => 'FizzBuzz',
    3 => 'Fizz',
    5 => 'Buzz'
  ];
  foreach ($b as $c => $d) {
    $e = "/^(".implode('|', range($c, 100, $c)).")$/";
    $i = preg_replace($e, $d, $i);
  }
  
  echo "$i\n";
}

array_map(a, range(1, 100));