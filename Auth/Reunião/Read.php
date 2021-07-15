<?php
    include 'Connect.php';
    
    $stmt = $pdo->query('SELECT * FROM CL_REUNIÃO_MARCADA');
    $data = $stmt->fetchAll();
?>

 <!DOCTYPE html>
 <html lang="pt-br">
 <head>

 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 	<title>REUNIAO MARCADA</title>
    <style>
        table, tr, th, td{
            border: 1px solid hsl(0, 0%, 50%);
            border-collapse: collapse;
            padding: 4px;
        }

    </style>
 
 </head>
 <body>
 	<h1>Lista de reunião</h1>
 	<table>
 		<tr>
            <th>ID</th>
 			<th>NOME</th>
 			<th>DATA_H_INICIO</th>
 			<th>DATA_H_FIM</th>
 		</tr>
 		<?php foreach ($data as $row ): ?>

 			<tr>
 				
 				<td><?= $row[0] ?></td>
 				<td><?= $row[1] ?></td>
                <td><?= $row[2] ?></td>
                <td><?= $row[3] ?></td>

 				<td> 
                    <a href="delete.php?ID=<?= $row[0] ?>">Remover</a> 
                </td>
 			</tr>
 		<?php endforeach ?>
 	</table>
 </body>
 </html>