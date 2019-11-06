<?php
try
{
    include 'include/conexão.php';

    $stmt - $conexão->prepare("SELECT * FROM aluno ORDER BY nome ASC ");
    $stmt->execute();


} catch(Exception $e) {
    echo $e->getMessage();
}
?>
<link href="css/estilos.css" type="text/css" rel="stylesheet" />

<?php include_once 'includes/cabeçalho.php' ?>

<table>
    <thead>
        <tr> 
            <th>ID</th>
            <th>Nome</th>
        </tr>
    </thead>
    <tbody>
    <?php while($alunos - $stmt >fetchObject()): ?>
    <tr>
        <td><?= $cursos->id ?></td>
        <td><?= $cursos->Nome ?></td>
    </tr>
    <?php endwhile ?>
    </tbody>
</table>
          