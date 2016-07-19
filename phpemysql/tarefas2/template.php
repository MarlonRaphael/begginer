<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Genrenciador de Tarefas</title>
        <link rel="stylesheet" href="tarefas.css" media="all"/>
    </head>
    <body>
        <form>
            <fieldset>
                <legend>Nova Tarefa</legend>
                <label>
                    Tarefa:
                    <br>
                    <input type="text" name="nome"/>
                </label>
                <br>
                <label>
                    Descrição (Opcional):
                    <br>
                    <textarea name="descricao"></textarea>
                </label>
                <br>
                <label>
                    Prazo (Opcional):
                    <br>
                    <input type="date" name="prazo">
                </label>
                <br>
                <fieldset>
                    <legend>Prioridade:</legend>
                    <label>
                        Baixa:
                        <input type="radio" name="prioridade" value="baixa" checked>
                        Média:
                        <input type="radio" name="prioridade" value="media">
                        Alta:
                        <input type="radio" name="prioridade" value="alta">
                    </label>
                </fieldset>
                <label>
                    Tarefa concluída:
                    <input type="checkbox" name="concluida" value="sim"/>
                </label>
                <br>
                <input type="submit" value="Cadastrar"/>
                <input type="reset" value="Limpar Campos"/>
            </fieldset>
        </form>
        <hr>
        <table>
            <tr>
                <th>Tarefa</th>
                <th>Descrição</th>
                <th>Prazo</th>
                <th>Prioridade</th>
                <th>Concluída</th>
            </tr>
            <?php foreach ($lista_tarefas as $tarefa): ?>
                <tr>
                    <td><?php echo $tarefa['nome']; ?></td>
                    <td><?php echo $tarefa['descricao']; ?></td>
                    <td><?php echo $tarefa['prazo']; ?></td>
                    <td><?php echo $tarefa['prioridade']; ?></td>
                    <td><?php echo $tarefa['concluida']; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </body>
</html>