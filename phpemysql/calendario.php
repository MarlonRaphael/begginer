<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Calendário, dia <?php echo date('d'); ?></title>
        <style media="all" type="text/css">

        </style>
    </head>
    <body>
    <h1><?php echo "Estamos em ".date('Y'); ?></h1>
    <p>
        <?php echo "Agora são ".date('H')." horas e ".date('i')." minutos."; ?>
    </p>
    <?php
    function linha($semana){
        echo "<tr>";
        for($i = 0; $i <=6; $i++){
            if(isset($semana[$i])){
                echo "<td>{$semana[$i]}</td>";
            }else{
                echo "<td></td>";
            }
        }
        echo "</tr>";
    }
    function calendario(){
        $dia = 1;
        $semana = array();
        while($dia <= 31){
            array_push($semana, $dia);
            if(count($semana) == 7){
                linha($semana);
                $semana = array();
            }
            $dia ++;
        }
        linha($semana);
    }
    ?>
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