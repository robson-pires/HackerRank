<?php

// Complete the rotLeft function below.
function rotLeft($a, $d, $n) {

  for ( $i = 0 ; $i < $d ; $i++ ) {

    $first = $a[0];

     for( $j = 1; $j < $n ; $j++ ) {

      $a[$j - 1] = $a[$j];

    }

    $a[$n-1] = $first;

  }

  return $a;

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%[^\n]", $nd_temp);
$nd = explode(' ', $nd_temp);

$n = intval($nd[0]);

$d = intval($nd[1]);

fscanf($stdin, "%[^\n]", $a_temp);

$a = array_map('intval', preg_split('/ /', $a_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = rotLeft($a, $d, $n);

fwrite($fptr, implode(" ", $result) . "\n");

fclose($stdin);
fclose($fptr);
