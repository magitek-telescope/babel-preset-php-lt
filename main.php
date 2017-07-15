<?php

$data = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$odds = array_filter($data, function ($datum) {
  return $datum%2;
});

var_dump($odds);