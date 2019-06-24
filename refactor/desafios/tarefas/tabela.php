<?php if (isset($lista_tarefas)): ?>
    <a href="limpar_tarefas.php" role="button" style="margin: 50px;">
        Limpar tarefas concluídas
    </a>
    <table>
        <thead>
        <tr>
            <th>Tarefa</th>
            <th>Descrição</th>
            <th>Prazo</th>
            <th>Prioridade</th>
            <th>Concluída</th>
            <th colspan="3">Opções</th>
        </tr>
        </thead>
        <tbody>
            <?php foreach ($lista_tarefas as $tarefa): ?>
            <tr>
                <td><?= $tarefa['nome']; ?></td>
                <td><?= $tarefa['descricao']; ?></td>
                <td>
                  <?= traduzDataParaExibir($tarefa['prazo']); ?>
                </td>
                <td>
                  <?= traduzPrioridade($tarefa['prioridade']); ?>
                </td>
                <td>
                  <?= traduzConcluida($tarefa['concluida']); ?>
                </td>
                <td>
                    <a href="tarefas.php?id=<?= $tarefa['id']; ?>">
                        Editar
                    </a>
                </td>
                <td>
                    <a href="remover.php?id=<?= $tarefa['id']; ?>">
                        Remover
                    </a>
                </td>
                <td>
                    <a href="duplicar.php?id=<?= $tarefa['id']; ?>">
                        Duplicar
                    </a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>