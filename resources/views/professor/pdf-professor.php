<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Lista de professores</title>
		<style type="text/css">
			table, th, td{
				border: 1px solid black;
				border-collapse: collapse;
				padding: 8px;
			}
			table{
				width: 100%;
			}
		</style>
	</head>
	<body>
		<h2 align="center">Lista de professores</h2>
		<table>
			<thead>
				<tr>
					<th>ID</th>
					<th>Nome</th>
					<th>Data de nascimento</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($professores as $professor): ?>
				<tr>
					<td><?= $professor->id_professor ?></td>
					<td><?= $professor->nome_professor ?></td>
					<td><?= $professor->data_nascimento_professor ?></td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</body>
</html>