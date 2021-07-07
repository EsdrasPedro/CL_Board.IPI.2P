<?php 

    include 'Connection4.php';
    $stmt = $pdo->query('SELECT * FROM cl_disciplina_ofertada');
    $date = $stmt->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Diciplinas Ofertadas</title>
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
  <h1>Diciplina Ofertada</h1>
  <table>
    <tr>
        <th>ID</th>
        <th>ANO</th>
        <th>SEMESTRE</th>
        <th>COR</th>
    </tr>
    <?php foreach($date as $row): ?>
        <tr>
            <td><?= $row[0] ?></td>
            <td><?= $row[1] ?></td>
            <td><?= $row[2] ?></td>
            <td><?= $row[3] ?></td>
            <td>
            <a href="delete4.php?ID=<?= $row[0] ?>">Deletar</a>
            </td>
        </tr>
    <?php endforeach ?>
  </table>
</body>
</html>

