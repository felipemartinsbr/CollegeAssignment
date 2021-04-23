<?php
require_once 'inicializacao.php';
    $sql = 'SELECT * FROM `default`.`recados`;';


if (!$result = $db->query($sql)):
    echo 'Ocorreu um erroa o inserir: '.$db->error;
else:
?>

    <table border="1">
        <tr>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Cidade</th>
            <th>Recado</th>
            <th></th>
            <th></th>
        </tr>
        <?php
        while ($row = $result->fetch_object()):
        ?>

        <tr>
            <td><?= $row->nome ?></td>
            <td><?= $row->email ?></td>
            <td><?= $row->cidade ?></td>
            <td><?= $row->recado ?></td>
            <td><a href="index.php?excluir=<?= $row->idrecados ?>">Excluir</a></td>
            <td><a href="index.php?alterar=<?= $row->idrecados ?>">Alterar</a></td>

        </tr>
            <?php
        endwhile;
            ?>
    </table>
<?php
    endif;
?>