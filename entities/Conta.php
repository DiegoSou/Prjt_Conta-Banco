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
                . "Saldo " . number_format($this->saldo, 2, '.', '')
                . "<br/> <br/>";
    }

    public function depositar($valor){
        $this->saldo += $valor;
        echo "Depósito de: "
            . number_format($valor, 2, '.', '') . " reais. | "
            . "Saldo atual: " 
            . number_format($this->saldo, 2, '.', '') . " <br/> ";
    }

    public function saque($valor){
        $this->saldo -= $valor;
        echo "Saque de "
            . number_format($valor, 2, '.', '') . " reais. | "
            . "Saldo atual: "
            . number_format($this->saldo, 2, '.', '') . " <br/> ";
    }
}