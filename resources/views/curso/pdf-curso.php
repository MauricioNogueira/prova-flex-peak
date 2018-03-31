<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Lista de cursos</title>
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
		<h2 align="center">Lista de cursos</h2>
		<table>
			<thead>
				<tr>
					<th>ID</th>
					<th>Nome do curso</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($cursos as $curso): ?>
				<tr>
					<td><?= $curso->id_curso ?></td>
					<td><?= $curso->nome_curso ?></td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</body>
</html>