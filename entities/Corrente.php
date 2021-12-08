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
            parent::saque($valor);
        else :
            // Se não for autorizado, entra como uma excessão particular da classe
            echo "Saque não autorizado."
                . " | Saldo atual: {$this->saldo}"
                . " | Limite atual: {$this->limite}"
                . "<br/>";
        endif;

    }
}

?>