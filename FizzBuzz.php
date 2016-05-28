<?php

for($i=0; $i<=100; $i++) {
  echo ($i%15? $i%5? $i%3? $i : "Buzz" : "Fizz" : "FizzBuzz")."\n";
}