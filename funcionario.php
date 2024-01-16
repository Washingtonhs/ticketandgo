<?php

    /**
    *Mostra todos os dados do funcionário de acordo com o id recebido por get.
    *Deve mostrar o nome do usuário que está fazendo o teste, como registrado na sessão.
    *Deve conter um link que volta para a listagem.
    */

    include 'lib/Funcionarios.php';
    include 'lib/Funcionario.php';
    include 'lib/Empresa.php';
    include 'lib/Pagina.php';

    $funcionarios = new Funcionarios();
    $data = $funcionarios->pegarFuncionarioPorId($_GET['id']);
    $nomeTipo = $funcionarios->getTipoPorExtenso($data->tipo);
    $pagina = new Pagina('página 2 - Funcionário');

    $table = '<table>';
    $table .= '<tr>';
    $table .= '<td>ID</td>';
    $table .= '<td>Nome</td>';
    $table .= '<td>Tipo</td>';
    $table .= '</tr>';
    $table .= '<tr>';
    $table .= '<td>'.$data->id.'</td>';
    $table .= '<td>'.$data->nome.'</td>';
    $table .= '<td>'.$nomeTipo.'</td>';
    $table .= '</tr>';
    $table .= '</table>';


    $pagina->setConteudo($table);
    $pagina->mostrar();