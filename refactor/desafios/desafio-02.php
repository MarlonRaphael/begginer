<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Desafio 02</title>
</head>
<body>
    <h3># Desafio 2</h3> - <strong>FAZER O RESTANTE DOS MESES DO ANO</strong>
    <h4><?php saudacao(); ?></h4>
    <table cellspacing="0" cellpadding="5" border="1">
        <thead>
        <tr>
            <th>Dom</th>
            <th>Seg</th>
            <th>Ter</th>
            <th>Qua</th>
            <th>Qui</th>
            <th>Sex</th>
            <th>Sáb</th>
        </tr>
        </thead>
        <tbody>
            <?php calendario(); ?>
        </tbody>
    </table>
</body>
</html>

<?php

function saudacao()
{
	# Hora atual
	$horaAtual = date('H:i:s');

	# Validação de horários
	if ($horaAtual >= 00 && $horaAtual < 6) {
		echo "Boa madrugrada!";
	} elseif ($horaAtual >= 6 && $horaAtual < 12) {
		echo "Bom dia!";
	} elseif ($horaAtual >= 12 && $horaAtual < 18) {
		echo "Boa tarde!";
	} elseif ($horaAtual >= 18 && $horaAtual < 00) {
		echo "Boa noite!";
	} else {
		echo "Horário inválido!";
	}
}

function linha($semana)
{
	# Hora atual
	$dataAtual = date('j');

	echo "<tr>";
	for ($i = 0; $i <= 6; $i++) {
		if (isset($semana[$i])) {
			if ($semana[$i] == $dataAtual || isset($semana[$i]) && $i == 6) {
				echo "<td><strong>{$semana[$i]}</strong></td>";
			} elseif ($semana[$i] == $dataAtual || isset($semana[$i]) && $i == 0) {
				echo "<td><strong style='color: #fa0f52;'>{$semana[$i]}</strong></td>";
			} else {
				echo "<td>{$semana[$i]}</td>";
			}
		} else {
			echo "<td></td>";
		}
	}
	echo "</tr>";
}

function calendario()
{
	$dia = 1;
	$semana = array();

	$semana[] = '';

	while ($dia <= 31) {
		array_push($semana, $dia);

		if (count($semana) == 7) {
			linha($semana);
			$semana = array();
		}
		$dia++;
	}
	linha($semana);
}

