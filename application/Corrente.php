<?php
require_once 'Conta.php';

final class Corrente extends Conta{
    protected $limite;

    public function __construct($agencia, $conta, $saldo, $limite){
        parent :: __construct($agencia, $conta, $saldo);
        $this->limite = $limite;
    }

    public function saque($valor){
        if($this->saldo + $this->limite >= $valor) :
            $this->saldo -= $valor;
            echo "Saque de {$valor} | Saldo atual {$this->saldo} <br/>";
        else :
            echo "Saque não autorizado | Saldo atual: {$this->saldo} | Limite: {$this->limite} <br/>";
        endif;
    }
}

?>