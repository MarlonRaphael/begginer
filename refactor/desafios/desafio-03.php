<?php session_start(); ?>
<!doctype html>
<html lang="pt-br">
<head>

	<meta charset="UTF-8">
	<meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<title>Lista de contatos</title>
</head>
<body>
<h1>Lista de contatos</h1>
<fieldset>
    <legend>
        Adicionar contato
    </legend>
    <form action="">
        <label for="nome">
            Nome: <input type="text" name="contato[nome]"/>
        </label>
        <label for="telefone">
            Telefone: <input type="tel" name="contato[telefone]"/>
        </label>
        <label for="email">
            E-mail: <input type="email" name="contato[email]"/>
        </label>
        <button type="submit">Salvar</button>
    </form>
</fieldset>
<hr>

<?php

if (isset($_GET['contato'])) {
    $_SESSION['lista_contatos'][] = $_GET['contato'];
}

$lista_contatos = array();

if (isset($_SESSION['lista_contatos'])) {
	$lista_contatos = $_SESSION['lista_contatos'];
}

if (isset($lista_contatos)): ?>
<table cellspacing="0" cellpadding="10" border="0">
    <thead>
    <tr>
        <th>Nome</th>
        <th>Telefone</th>
        <th>E-mail</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($lista_contatos as $contato): ?>
    <tr>
        <td><?= $contato['nome'] ?></td>
        <td><?= $contato['telefone'] ?></td>
        <td><?= $contato['email'] ?></td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<?php endif; ?>
</body>
</html>
