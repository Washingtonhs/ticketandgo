<?php

session_start();
date_default_timezone_set('America/Sao_Paulo');

class Pagina
{
    public $nomeUsuario;
    public $tituloPagina;
    public $conteudo;

    public function __construct($tituloPagina)
    {
        $this->tituloPagina = $tituloPagina;
        $this->nomeUsuario = $_SESSION['nome'];
    }

    public function setNomeUsuario($nomeUsuario)
    {
        $this->nomeUsuario = $nomeUsuario;
    }

    public function setConteudo($conteudo)
    {
        $this->conteudo = $conteudo;
    }

    public function headHTML()
    {
        $head  = "<html>";
        $head .= "<head>";
        $head .= "<meta name='viewport' content='width=device-width'>";
        $head .= "<meta charset='UTF-8'>";
        $head .= "<title>Para iniciantes</title>";
        $head .= "<link rel='stylesheet' type='text/css' href='style.css'>";
        $head .= "</head>";
        return $head;      
    }

    public function mostrar()
    {
        $stHtml = self::headHTML();
        $stHtml .= "<body><div id='cabecalho'> 
                TESTE DE ADMISSÃO DE " . $this->nomeUsuario . '<br>' . $this->tituloPagina . '
            </div>';
        $stHtml .= $this->conteudo;
        $stHtml .= "<footer> ".date('d/m/y H:i:s')."</footer></body></html>";
        echo $stHtml;
    }
}
