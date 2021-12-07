<?php
require_once 'Corrente.php';
require_once 'Poupanca.php';

$idAgencia = isset($_POST['idAgencia']) ? $_POST['idAgencia'] : null;
$idConta = isset($_POST['idConta']) ? $_POST['idConta'] : null;
$saldo = isset($_POST['saldo']) ? $_POST['saldo'] : null;
$tipoConta = isset($_POST['tipoConta']) ? $_POST['tipoConta'] : null;

if($tipoConta == "Corrente"){
    $limite = 450.20;
    $c1 = new Corrente($idAgencia, $idConta, $saldo, $limite);
}else{
    $c1 = new Poupanca($idAgencia, $idConta, $saldo);
}


echo $c1->getDetalhes();
// $c1->saque(300);
// $c1->depositar(5000.20);
// $c1->saque(9000)
?>

