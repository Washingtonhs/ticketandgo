<?php
    session_start();
    $_SESSION['nome'] = 'WASHINGTON SANTOS';

    include 'lib/Funcionarios.php';
    include 'lib/Empresa.php';
    include 'lib/Funcionario.php';
    include 'lib/Pagina.php';

    $funcionarios = new Funcionarios();
    $empresa = new Empresa(1);
    $conteudo = '';

    while ($funcionario = $funcionarios->pegarFuncionario()) {
        $empresa->addFuncionario($funcionario);
    }
    $arFuncionarios = $empresa->getFuncionarios();
    
    $htmlConteudo = '';
    foreach ($arFuncionarios as $funcionario) {
        $htmlConteudo .= "<a href='funcionario.php?id=" . $funcionario->getId() . "'>" . $funcionario->getId()." - " .$funcionario->getNome()  . '</a><br>';
    }

    $pagina = new Pagina('Página 1 - Lista de Funcionários Disponíveis');
    $pagina->setConteudo($htmlConteudo);
    $pagina->mostrar();
