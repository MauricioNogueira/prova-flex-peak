<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Lista de Alunos</title>
	</head>
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
	<body>
		<h2 align="center">Lista de Alunos</h2>
		<table>
			<thead>
				
			</thead>
			<tbody>
				<?php foreach($alunos as $aluno): ?>
				<tr>
					<td rowspan="3"><strong>ID: </strong><?= $aluno->id_aluno ?></td>
					<td colspan="2"><strong>Nome:</strong> <?= $aluno->nome ?></td>
					<td><strong>Data de nascimento: </strong><?= $aluno->data_nascimento ?></td>
				</tr>
				<tr>
					<td><strong>CEP: </strong><?= $aluno->cep ?></td>
					<td><strong>Logradouro: </strong><?= $aluno->logradouro ?></td>
					<td><strong>Nº da residência: </strong><?= $aluno->numero ?></td>
				</tr>
				<tr>
					<td><strong>Estado: </strong><?= $aluno->estado ?></td>
					<td><strong>Cidade: </strong><?= $aluno->cidade ?></td>
					<td><strong>Bairro: </strong><?= $aluno->bairro ?></td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</body>
</html>