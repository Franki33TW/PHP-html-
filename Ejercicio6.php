<?php

$H = 19;
$M = 50;
$S = 30;

if( ($H>=0 and $H<=23) and ($M>=0 and $M<=59) and ($S>=0 and $S<=59) ){

  echo "La hora $H:$M:$S es válida";

} else{

  echo "La hora $H:$M:$S no es válida";

}

?>