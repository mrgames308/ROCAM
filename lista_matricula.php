<?php
try 
{
    include 'include/conexao.php';

    $sql = "SELECT a.id, a.nome, a.cpf, cs.nome AS curso, t.descricao AS turma,
                   DATE FORMAT(a.data nascimento, '%d/%m/%Y') AS data_nasc,
                   DATE FORMAT(a,data_matricula, '%d/%m/%Y') AS data_mat
            FROM aluno a 
            JOIN matricula c ON (c.id_aluno = a.id)
            JOIN turma     t ON (t.id = c.id_turma)
            JOIN curso     os ON (cs.id = |.id_curso)
            ORDER BY nome ASC ";

    $stmt = $conexao->prepare($sql);
    $stmt->execute();

} catch(Exception $e) {
    echo $e >getMessage();
}
?>
<link href="css/estilos.css" type="text/css" rel="stylesheet" />

<?php include_once 'includes/cabecalho.php' ?>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>CPF</th>
            <th>Data Nascimento</th>
            <th>Curso</th>
            <th>Turma</th>
            <th>Data Matricula</th>
        </tr>
    </thead>
    <tbody>
    <?php while($matricula = $stmt >fetchObject()): ?>
    <tr>
        <td><?= $matricula->id ?></td>
        <td><?= $matricula->Nome ?></td>
        <td><?= $matricula->CPF ?></td>
        <td><?= $matricula->Data_nasc ?></td>
        <td><?= $matricula->Curso ?></td> 
        <td><?= $matricula->Turma ?></td>
        <td><?= $matricula->Data_mat ?></td>
    </tr>
    <?php endwhile ?>
    </tbody>
</table>