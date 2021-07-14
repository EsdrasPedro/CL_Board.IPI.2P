<?php
    include 'Connect.php';
    
    $stmt = $pdo->query('SELECT * FROM cl_usuario');
    $data = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Usuários</title>
  <style>
  table, tr, td, th {
    border: 1px solid hsl(0, 0%, 50%);
    border-collapse: collapse;
  }
  td, th {
    padding: 0.5em;
  } 
  </style>
</head>
<body>
  <h1>Lista de Usuários</h1>
  <table>
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>SOBRENOME</th>
        <th>DATA DE NASCIMENTO</th>
        <th>GENERO</th>
        <th>N° CELULAR</th>
        <th>TIPO DE USUARIO</th>
        <th>MATRICULA</th>
        <th>E-MAIL</th>
        <th>SENHA</th>
    </tr>
    <?php foreach($data as $row): ?>
        <tr>
            <td><?= $row[0] ?></td>
            <td><?= $row[1] ?></td>
            <td><?= $row[2] ?></td>
            <td><?= $row[3] ?></td>
            <td><?= $row[4] ?></td>
            <td><?= $row[5] ?></td>
            <td><?= $row[6] ?></td>
            <td><?= $row[7] ?></td>
            <td><?= $row[8] ?></td>
            <td><?= $row[9] ?></td>
            <td>
                <a href="Remove.php?ID=<?= $row[0] ?>">Remover</a>
            </td>
        </tr>
    <?php endforeach ?>
  </table>
</body>
</html>