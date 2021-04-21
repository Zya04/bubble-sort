<?php
$array = [64, 34, 25, 12, 22, 11, 90];

$asc = function() use (&$array){
  $len = count($array);

  for($i = 0; $i < $len; $i++){
      for ($j = 0; $j < $len - $i; $j++){
          if ($array[$j] > $array[$j+1]){
              $t = $array[$j];
              $array[$j] = $array[$j+1];
              $array[$j+1] = $t;
          }
      }
  }

  echo "la liste des nombres en ordre croissant : " .PHP_EOL;
  for ($i = 0; $i < $len; $i++)
      echo $array[$i]." ";
};

$desc = function() use (&$array){
  $len = count($array);

  for($i = 0; $i < $len; $i++){
      for ($j = 0; $j < $len - $i - 1; $j++){
          if ($array[$j] < $array[$j+1]){
              $t = $array[$j];
              $array[$j] = $array[$j+1];
              $array[$j+1] = $t;
          }
      }
  }

  echo "la liste des nombres en ordre déscroissant : " .PHP_EOL;
  for ($i = 0; $i < $len; $i++)
      echo $array[$i]." ";
};

function bubble_sort(array &$array, $fn){
  return $fn($array);
}

var_dump(bubble_sort($array, $asc));
var_dump(bubble_sort($array, $desc));
