<?php
// input numero decimale
fwrite(STDOUT, “Inserisci il numero decimale da convertire: “);

// get input
$valore = trim(fgets(STDIN));
$nuovo_valore = decbin($valore);
// write input back

fwrite(STDOUT, “\nIl risultato della conversione di $valore in binario: $nuovo_valore\n”);
?>
