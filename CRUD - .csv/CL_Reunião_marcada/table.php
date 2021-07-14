<?php 

$lines = file('BD.csv');

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 	<title>Tabela</title>
 	<style>

 		table, tr, td, th{

	    	border: 2px  gray solid;
      		border-collapse: collapse;
 		}
	
	</style>

</head>

 <body>

 	<table>
 		<?php foreach ($lines as $linha => $line): ?>
 			<tr>

 				<?php $dados = explode(";", $line) ?>
 				<?php foreach ($dados as $dado): ?>
 					<?php if ($linha == 0): ?>
 					<th><?= $dado?></th>
 					<?php else: ?>
 					<td><?= $dado ?></td>
 				<?php endif ?>
 				<?php endforeach?>
 				<?php if ($linha == 0 ): ?>
 					<td></td>
 				<?php else: ?>
 					<td><a href="delete.php?line=<?= $linha?>">REMOVER</a></td>
 				<?php endif ?>

 			</tr>
 		<?php endforeach ?>

 	</table> 
 </body>
 
 </html>