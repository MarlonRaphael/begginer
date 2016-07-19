<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Lista de Contatos</title>
        <link rel="stylesheet" href="contatos.css" media="all" type="text/css"/>
    </head>
    <body>

        <form>
            <fieldset>
                <legend>Lista de Contatos</legend>
                <label>
                    Nome:
                    <br>
                    <input type="text" name="nome"/>
                </label>
                <br>
                <label>
                    Telefone:
                    <br>
                    <input type="tel" name="fone"/>
                </label>
                <br>
                <label>
                    E-mail:
                    <br>
                    <input type="email" name="mail"/>
                </label>
                <br>
                <label>
                    Data de nascimento:
                    <br>
                    <input type="date" name="nasc">
                </label>
                <br>
                <label>
                    Favorito:
                    <input type="checkbox" name="cfav" value="Sim">
                </label>
                <br>
                <label>
                    Descrição:
                    <br>
                    <textarea name="descricao"></textarea>
                </label>
                <br>
                <input type="submit" name="send" value="Cadastrar"/>
                <input type="reset" value="Limpar Campos"/>
            </fieldset>
        </form>
        <hr/>
        <table border="1">
            <th>Nome</th>
            <th>Telefone</th>
            <th>E-mail</th>
            <th>Data de nasciomento</th>
            <th>Favorito</th>
            <th>Descrição</th>
            <?php foreach ($lista_contatos as $contato): ?>
                <tr>
                    <td><?php echo $contato['nome']; ?></td>
                    <td><?php echo $contato['fone']; ?></td>
                    <td><?php echo $contato['mail']; ?></td>
                    <td><?php echo $contato['nasc']; ?></td>
                    <td><?php echo $contato['cfav']; ?></td>
                    <td><?php echo $contato['descricao']; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>

    </body>
</html>