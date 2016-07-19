<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Calendário, dia <?php echo date('d'); ?></title>
        <style media="all" type="text/css">
        * {
            font-family: "Segoe UI Light";
        }
        td, th {
            text-align: center;
            padding: 5px;
        }
        th {
            background: #CCC;
            color: #737373;
        }
        </style>
    </head>
    <body>
        <?php

        function cabecalho()
        {
            $hora = date('H:i');
            if ($hora >= 6 && $hora < 12) {
                echo "Olá {$_GET['nome']}, bom dia";
            }else if ($hora >= 12 && $hora < 18) {
                echo "Olá {$_GET['nome']}, boa tarde";
            }else if($hora >= 18 && $hora < 23 || $hora == 00) {
                echo "Olá <strong>{$_GET['nome']}</strong>, boa noite";
            }else{
                echo "Olá <strong>{$_GET['nome']}</strong>, boa madrugada";
            }
            echo ", agora são {$hora}<br/>";
        }
        function linha($semana)
        {
            echo "<tr>";
            for ($i = 0; $i <= 6; $i++) {
                if (isset($semana[$i])) {
                    if($semana[$i] == date('j')){
                        echo "<td style='background: #009999;color: aqua;'><strong>{$semana[$i]}</strong></td>";
                    }else if($i == 0){
                        echo "<td style='background: #ffb3b3; color: #b30000;'><strong>{$semana[$i]}</strong></td>";
                    }else if($i == 6){
                        echo "<td style='background: #e5ffe5; color: #00b32d;'><strong>{$semana[$i]}</strong></td>";
                    }else{
                        echo "<td>{$semana[$i]}</td>";
                    }
                }else{
                    echo "<td></td>";
                }
            }
            echo "</tr>";
        }
        function calendario()
        {
            $dia = 1;
            $semana = array(0 => "", 1 => "");
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
        cabecalho();
        ?>
        <hr/>
        <table border="1">
            <tr>
                <th>Dom</th>
                <th>Seg</th>
                <th>Ter</th>
                <th>Qua</th>
                <th>Qui</th>
                <th>Sex</th>
                <th>Sáb</th>
            </tr>
            <?php calendario(); ?>
        </table>
    </body>
</html>