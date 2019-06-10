<?php session_start(); ?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gerenciador de Tarefas</title>

    <style>
        body {
            font-family: Sans-serif;
            color: #333;
        }

        h1 {
            text-align: center;
        }

        .erro {
            color: #F44;
        }

        fieldset {
            border: 1px solid #555;
            color: #333;
            margin: 10px 0 0 0;
        }

        label {
            display: block;
            margin: 10px 0 0 0;
        }

        input[type=text],
        textarea {
            font-family: Sans-serif;
            font-size: 1.2em;
            width: 100%;
            border: 1px solid #555;
            padding: 5px;
        }

        input[type=submit] {
            margin: 10px 0 0 0;
            font-family: Sans-serif;
            font-size: 1em;
            float: right;
            clear: both;
            border: 1px solid #555;
            padding: 7px;
        }

        table {
            width: 100%;
        }

        table th {
            background-color: #EEE;
            font-size: 1em;
            padding: 10px;
        }

        table td {
            border-bottom: 1px solid #333;
            color: #000;
        }
    </style>
</head>
<body>
<h1>Gerenciador de tarefas</h1>
	<fieldset>
		<legend>Nova tarefa</legend>
		<form action="">
			<label for="nome">
				Tarefa: <input type="text" name="nome"/>
			</label>
			<button type="submit">Cadastrar</button>
		</form>
	</fieldset>

	<hr>

	<?php

        if (isset($_GET['nome'])) {
            $_SESSION['lista_tarefas'][] = $_GET['nome'];
        }

		# Array de tarefas
		$lista_tarefas = array();

		if (isset($_SESSION['lista_tarefas'])) {
			$lista_tarefas = $_SESSION['lista_tarefas'];
		}

	?>

	<table cellpadding="5" cellspacing="0" border="1">
		<thead>
		<tr>
			<th>Tarefa</th>
		</tr>
		</thead>
		<tbody>
		<?php foreach ($lista_tarefas as $tarefa): ?>
		<tr>
			<td><?= $tarefa ?></td>
		</tr>
		<?php endforeach; ?>
		</tbody>
	</table>

</body>
</html>