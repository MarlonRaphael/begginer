<fieldset>
	<legend>
      <?= ($tarefa['id'] > 0) ? 'Editar tarefa' : 'Nova tarefa'; ?>
    </legend>
	<form action="">
        <input type="hidden" name="id" value="<?= $tarefa['id']; ?>">
		<label for="nome">
			Tarefa: <input type="text" name="nome" value="<?= $tarefa['nome']; ?>" />
		</label>
		<label for="descricao">
			Descrição (Opcional): <textarea name="descricao" id="" cols="30" rows="10"><?= $tarefa['descricao']; ?></textarea>
		</label>
		<label for="prazo">
			Prazo : <input type="date" name="prazo" value="<?= date('Y-m-d', strtotime($tarefa['prazo'])); ?>" />
		</label>
		<fieldset>
			<legend>Prioridade: </legend>
			<label for="baixa">
				<input type="radio" name="prioridade" id="baixa" value="1" <?= ($tarefa['prioridade'] == 1) ? 'checked':'';?> /> Baixa
			</label>
			<label for="media">
				<input type="radio" name="prioridade" id="media" value="2" <?= ($tarefa['prioridade'] == 2) ? 'checked':'';?> /> Média
			</label>
			<label for="alta">
				<input type="radio" name="prioridade" id="alta" value="3" <?= ($tarefa['prioridade'] == 3) ? 'checked':'';?> /> Alta
			</label>
		</fieldset>
		<label for="concluida">
			<input type="checkbox" name="concluida" id="concluida" value="1" <?= ($tarefa['concluida'] == 1) ? 'checked':'';?> /> Concluída
		</label>
		<br>
        <button type="submit"><?= ($tarefa['id'] > 0) ? 'Atualizar':'Cadastrar' ;?></button>
		<?= ($tarefa['id'] > 0) ? '<a href="tarefas.php" role="button">Cancelar</a>' : '';?>
	</form>
</fieldset>