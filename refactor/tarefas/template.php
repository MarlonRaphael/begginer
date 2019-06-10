<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gerenciador de Tarefas</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Gerenciador de tarefas</h1>

<fieldset>
    <legend>Nova tarefa</legend>
    <form action="">
        <label for="nome">
            Tarefa: <input type="text" name="nome" />
        </label>
        <label for="descricao">
            Descrição (Opcional): <textarea name="descricao" id="" cols="30" rows="10"></textarea>
        </label>
        <label for="prazo">
            Prazo : <input type="text" name="prazo" />
        </label>
        <fieldset>
            <legend>Prioridade: </legend>
            <label for="baixa">
                <input type="radio" name="prioridade" id="baixa" value="baixa" checked /> Baixa
            </label>
            <label for="media">
                <input type="radio" name="prioridade" id="media" value="media" /> Média
            </label>
            <label for="alta">
                <input type="radio" name="prioridade" id="alta" value="alta" /> Alta
            </label>
        </fieldset>
        <label for="concluida">
            <input type="checkbox" name="concluida" id="concluida" value="sim" /> Concluída
        </label>
        <br>
        <button type="submit">Cadastrar</button>
    </form>
</fieldset>

<?php if(isset($lista_tarefas) && !empty($lista_tarefas)): ?>
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
<?php endif; ?>

</body>
</html>