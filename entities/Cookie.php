<?php
function addCookie($nome, $valor){
    $validade = strtotime("+1 month");
    setcookie($nome, $valor, $validade, "", "", false, true);
}

function forget($nome, $valor){
    $validade = strtotime("-1 month");
    setcookie($nome, $valor, $validade, "", "", false, true);
}

?>