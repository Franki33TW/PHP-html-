<?php

$caracter = $_POST["char"];

function vocal($char){

if($char == "i"){

    return "El carácter $char es igual a 'i'";

}else{

    return "El carácter $char es distinto a 'i'";

}

}

echo vocal($caracter);

?>