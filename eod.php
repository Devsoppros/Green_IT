<?php
echo "enter a number: ";
$n = trim(fgets(STDIN));

if($n % 2 == 0)
  echo "even";
else
  echo "odd";
