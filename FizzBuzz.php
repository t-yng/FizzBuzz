<?php

function fizzBuzz($i) {
  $array = [
    15 => 'FizzBuzz',
    3 => 'Fizz',
    5 => 'Buzz'
  ];
  foreach ($array as $key => $value) {
    $pattern = "/^(".implode('|', range($key, 100, $key)).")$/";
    $i = preg_replace($pattern, $value, $i);
  }
  
  echo "$i\n";
}

array_map(fizzBuzz, range(1, 100));