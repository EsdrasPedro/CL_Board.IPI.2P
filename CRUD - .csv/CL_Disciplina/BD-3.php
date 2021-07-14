<?php $lines = file('BD3.Csv'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="bootstrap.min.css" rel="stylesheet">
  <title>PeP 1</title>
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
  <table>
    <?php foreach ($lines as $linha => $line) : ?>
      <tr>
        <?php $dados = explode(";", $line); ?>
        <?php foreach ($dados as $dado) : ?>
          <?php if ($linha == 0): ?>
            <th><?= $dado ?></th>
          <?php else: ?>
            <td><?= $dado ?></td>
          <?php endif ?>
        <?php endforeach ?>
        <?php if ($linha == 0 || $linha == 1): ?>
            <td></td>
          <?php else: ?>
            <td><a class="delete" href="delete3.php?line=<?= $linha ?>">Remover</a></td>
          <?php endif ?>

      </tr>
    <?php endforeach ?>
    <tr><a href="CL_Disciplina.html">Voltar</a></tr>
    
  </table>
</body>
</html>