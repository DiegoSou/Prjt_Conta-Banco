<?php
abstract class Conta{
    protected $agencia;
    protected $conta;
    protected $saldo;

    public function __construct($agencia, $conta, $saldo){
        $this->agencia = $agencia;
        $this->saldo = $saldo;
        $this->conta = $conta;
    }

    public function getDetalhes(){
        return "Agencia: {$this->agencia} " 
                . "<br/>"
                . "Conta {$this->conta} | " 
                . "Saldo {$this->saldo} | "
                . "<br/> <br/>";
    }

    public function depositar($valor){
        $this->saldo += $valor;
        echo "Depósito de: {$valor} | Saldo atual {$this->saldo} <br/>";
    }
}