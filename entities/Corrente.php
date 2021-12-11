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
                . " | Saldo atual: " . number_format($this->saldo, 2, '.', '')
                . " | Limite atual: " . number_format($this->limite, 2, '.', '')
                . "<br/>";
        endif;

    }

    // public function getDetalhes(){
    //     return "". $this->getDetalhes() . "Limite {$this->limite} <br/>";
    // }
}

?>