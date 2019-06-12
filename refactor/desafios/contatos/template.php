<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="../../desafios/contatos/style.css">

    <title>Lista de contatos</title>
</head>
<body>
<h1>Lista de contatos</h1>
<fieldset>
    <legend>Adicionar contato</legend>
    <form action="">

        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome"/>

        <label for="telefone">Telefone:</label>
        <input type="tel" id="telefone" name="telefone"/>

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email"/>

        <label for="descricao">Descrição: </label>
        <textarea name="descricao" id="descricao" cols="30" rows="10"></textarea>

        <label for="datanasc">Data de nascimento:</label>
        <input type="date" id="datanasc" name="datanasc"/>

        <label for="favorito">
            <input type="checkbox" id="favorito" name="favorito" value="Sim"/> Favorito
        </label>

        <button type="submit">Salvar</button>
    </form>
</fieldset>
<hr>
<?php if (isset($lista_contatos)): ?>
    <table cellspacing="0" cellpadding="10" border="0">
        <thead>
        <tr>
            <th>Nome</th>
            <th>Telefone</th>
            <th>E-mail</th>
            <th>Descrição</th>
            <th>Data de nascimento</th>
            <th>Favorito</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($lista_contatos as $contato): ?>
            <tr>
                <td><?= $contato['nome'] ?></td>
                <td><?= $contato['telefone'] ?></td>
                <td><?= $contato['email'] ?></td>
                <td><?= $contato['descricao'] ?></td>
                <td><?= $contato['datanasc'] ?></td>
                <td><?= $contato['favorito'] ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>
</body>
</html>