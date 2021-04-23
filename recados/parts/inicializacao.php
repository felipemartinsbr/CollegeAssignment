<?php

require_once 'Conexao.php';

use Recados\Conexao;

$conexao = new Conexao();
$db = $conexao->getConexao();

// Usuário preencheu os dados para cadastro

if (isset($_POST['cadastrar'])):

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cidade = $_POST['cidade'];
    $recado = $_POST['recado'];

    $sql = "INSERT INTO `default`.`recados` (`nome`, `email`, `cidade`, `recado`)
            VALUES ('$nome', '$email', '$cidade', '$recado');";

    if (!$result = $db->query($sql)):
        echo 'Ocorreu um erroa o inserir: '.$db->error;
    else:
        echo 'Cadastro realizado com sucesso';
    endif;
endif;

// Usuário clicou no link para excluir
if (isset($_GET['excluir']) && !empty($_GET['excluir'])):
    $id = $_GET['excluir'];
    $sql = "DELETE FROM `default`.`recados` WHERE `recados`.`idrecados` = $id ; ";

    if (!$result = $db->query($sql)):
        echo 'Ocorreu um erro ao excluir: '.$db->error;
    else:
        if ($db->affected_rows > 0):
        echo 'Cadastro excluído com sucesso';
        else:
            echo 'Cadastro não existe';
        endif;
    endif;
endif;

//Usuário clicou no link para alterar
if(!empty($_GET['alterar'])):
    $id = $_GET['alterar'];
    $sql = "SELECT FROM `default`.`recados` WHERE `recados`.`idrecados` = $id ; ";
    echo $sql;

    if (!$result = $db->query($sql)):
        echo 'Ocorreu um erro ao recuperar dados: '.$db->error;
    else:
        if ($db->affected_rows > 0):
            $dados= $result->fetch_object();

        else:
            echo 'Cadastro não existe';
        endif;
    endif;
endif;