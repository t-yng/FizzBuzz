<?php

function fizzBuzz($n, $replacement, $subject) {
  $pattern = "/^(".implode('|', range($n, 100, $n)).")$/";
  return preg_replace($pattern, $replacement, $subject);
}

for($i = 1; $i <= 100; $i++) {
  $result = $i;
  $result = fizzBuzz(15, 'FizzBuzz', $result);
  $result = fizzBuzz(3, 'Fizz', $result);
  $result = fizzBuzz(5, 'Buzz', $result);
  echo $result."\n";
}