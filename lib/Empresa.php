<?php

class Empresa
{
    public $id;
    public $nome;
    public $funcionarios = [];

    public function __construct($id)
    {
        $this->nome = 'Empresa número ' . $id;
        $this->funcionarios = [];
    }

    //colocar restrição aqui para só receber atributos do tipo funcionário
    public function addFuncionario(Funcionario $funcionario)
    {
        $this->funcionarios[] = $funcionario;
    }

    public function getFuncionarios()
    {
        return $this->funcionarios;
    }

     public function getNomeTipo($tipo)
    {
       return match ($tipo) {
            'FUNCIONARIO_MOTIVADO' => "K_FUNCIONARIO_MOTIVADO",
            'FUNCIONARIO_ESPERTO' => "K_FUNCIONARIO_ESPERTO",
            'FUNCIONARIO_HONESTO' => "K_FUNCIONARIO_HONESTO",
            'FUNCIONARIO_DESONESTO' => "K_FUNCIONARIO_DESONESTO",
            'FUNCIONARIO_PREGUICOSO' => "K_FUNCIONARIO_PREGUICOSO",
            'FUNCIONARIO_COOPERATIVO' => "K_FUNCIONARIO_COOPERATIVO",
            'asd' => "Este tipo de funcionário não é aceito",
        };
    }
}
