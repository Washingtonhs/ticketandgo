<?php

class TicketAndGo extends Empresa
{
    public function tiposPermitidosAdd(): Array
    {   
        return [
            K_FUNCIONARIO_HONESTO,
            K_FUNCIONARIO_COOPERATIVO,
            K_FUNCIONARIO_ESPERTO,
            K_FUNCIONARIO_MOTIVADO
        ];
    }

    public function addFuncionario(Funcionario $funcionario): void
    {   
        if (in_array($funcionario->tipo, self::tiposPermitidosAdd())) {
            parent::addFuncionario($funcionario);
        }
    }    
}