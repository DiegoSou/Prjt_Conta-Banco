<?php
require_once 'Conta.php';


final class Poupanca extends Conta{

    public function saque($valor){
        if($this->saldo >= $valor) :
            $this->saldo -= $valor;
            echo "Saque de {$valor} reais. | Saldo atual: {$this->saldo} <br/>";
        else :
            echo "Saque não autorizado | Saldo atual: {$this->saldo} <br/>";
        endif;
    }
}

?>