<?php

// Complete the arrayManipulation function below.
function arrayManipulation($n, $queries) {

  $max = 0;
  $v = [];

  for ( $i = 0 ; $i < $n ; $i++ ) {
    $v[] = 0;
  }

  foreach ($queries as $q ) {

    for ( $i = ($q[0]-1) ; $i < $q[1] ; $i++ ){

      $v[$i] += $q[2];

      if($v[$i] > $max){
        $max = $v[$i];
      }

    }
  }

  return $max;

}


$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%[^\n]", $nm_temp);
$nm = explode(' ', $nm_temp);

$n = intval($nm[0]);

$m = intval($nm[1]);

$queries = [];

for ($i = 0; $i < $m; $i++) {
    fscanf($stdin, "%[^\n]", $queries_temp);
    $queries[] = array_map('intval', preg_split('/ /', $queries_temp, -1, PREG_SPLIT_NO_EMPTY));
}

$result = arrayManipulation($n, $queries);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
