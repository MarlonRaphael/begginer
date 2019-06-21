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

<?php include ('formulario.php'); ?>

<hr>

<?php if ($exibir_tabela): ?>
	<?php include ('tabela.php'); ?>
<?php endif; ?>

</body>
</html>