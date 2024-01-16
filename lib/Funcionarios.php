<?php

class Funcionarios
{
    public $funcionarios = [];
    public $indice = 0;

    public function __construct()
    {
        $x = 0;
        $this->funcionarios[] = new Funcionario($x++, 'Zé', K_FUNCIONARIO_MOTIVADO);
        $this->funcionarios[] = new Funcionario($x++, 'Mario Prata', K_FUNCIONARIO_ESPERTO);
        $this->funcionarios[] = new Funcionario($x++, 'João Souza', K_FUNCIONARIO_HONESTO);
        $this->funcionarios[] = new Funcionario($x++, 'Maria Ambrosia', K_FUNCIONARIO_MOTIVADO);
        $this->funcionarios[] = new Funcionario($x++, 'Carlos Santos', K_FUNCIONARIO_MOTIVADO);
        $this->funcionarios[] = new Funcionario($x++, 'Francisco da Cunha', K_FUNCIONARIO_PREGUICOSO);
        $this->funcionarios[] = new Funcionario($x++, 'Godofredo Ansdruval', K_FUNCIONARIO_PREGUICOSO);
        $this->funcionarios[] = new Funcionario($x++, 'Marcoleidson Froga', K_FUNCIONARIO_PREGUICOSO);
        $this->funcionarios[] = new Funcionario($x++, 'Carmem de Sá', K_FUNCIONARIO_MOTIVADO);
        $this->funcionarios[] = new Funcionario($x++, 'Chica da Silva', K_FUNCIONARIO_MOTIVADO);
        $this->funcionarios[] = new Funcionario($x++, 'Francinaldo Andrades de Ló', K_FUNCIONARIO_DESONESTO);
        $this->funcionarios[] = new Funcionario($x++, 'Carmiro José', K_FUNCIONARIO_DESONESTO);
        $this->funcionarios[] = new Funcionario($x++, 'José Maria', K_FUNCIONARIO_HONESTO);
        $this->funcionarios[] = new Funcionario($x++, 'Dinho', K_FUNCIONARIO_DESONESTO);
    }

    public function pegarFuncionario()
    {
        if (!empty($this->funcionarios[$this->indice])) {
            return $this->funcionarios[$this->indice++];
        }
    }

    public function pegarFuncionarioPorId($id)
    {
        if (!empty($this->funcionarios[$id])) {
            return $this->funcionarios[$id];
        }
    }

    public function getTipoPorExtenso($tipo)
    {
        return match($tipo) {
            1 => 'K_FUNCIONARIO_MOTIVADO',
            2 => 'K_FUNCIONARIO_ESPERTO',
            3 => 'K_FUNCIONARIO_HONESTO',
            4 => 'K_FUNCIONARIO_DESONESTO',
            5 => 'K_FUNCIONARIO_PREGUICOSO',
            6 => 'K_FUNCIONARIO_COOPERATIVO',
        };
    }
}
