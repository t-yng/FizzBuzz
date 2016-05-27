<?php

for($i = 1; $i < 101; $i++) {
  echo $i % 15 == 0 ? 'FizzBuzz' : ($i % 3 == 0 ? 'Fizz' : ($i % 5 == 0)? 'Buzz':$i)."\n";
}