<?php

function a($i) {
  foreach ([15 => 'FizzBuzz', 3 => 'Fizz', 5 => 'Buzz'] as $b => $c) {
    $i = preg_replace("/^(".implode('|', range($b, 100, $b)).")$/", $c, $i);
  }  
  echo "$i\n";
}

array_map(a, range(1, 100));