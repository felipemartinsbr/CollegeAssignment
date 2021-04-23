<?php
namespace Recados;
use mysqli;

class Conexao
{
    private $conexao;

    public function __construct()
    {
        $this->conexao = new mysqli('localhost', 'root','Poiu@2020','default');

        if ($this->conexao->connect_errno > 0){
            die($this->conexao->connect_error);
        }
    }

    public function getConexao()
    {
        return $this->conexao;
    }

}