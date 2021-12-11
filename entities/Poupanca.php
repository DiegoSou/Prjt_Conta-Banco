<?php
require_once 'Conta.php';

final class Poupanca extends Conta{
    public function saque($valor) {
        if($this->saldo >= $valor) :
            parent::saque($valor);
        else :
            echo "Saque não autorizado."
                ." | Saldo na conta: " . number_format($this->saldo, 2, '.', '')
                ."<br/>";
        endif;
    }
}

?>