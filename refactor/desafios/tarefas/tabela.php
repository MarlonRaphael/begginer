<table>
	<thead>
	<tr>
		<th>Tarefa</th>
		<th>Descrição</th>
		<th>Prazo</th>
		<th>Prioridade</th>
		<th>Concluída</th>
		<th colspan="2">Opções</th>
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
				<a href="editar.php?id=<?= $tarefa['id']; ?>">
					Editar
				</a>
			</td>
            <td>
                <a href="remover.php?id=<?= $tarefa['id']; ?>">
                    Remover
                </a>
            </td>
		</tr>
	<?php endforeach; ?>
	</tbody>
</table>